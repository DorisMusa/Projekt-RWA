<?php

namespace App\Http\Controllers;


use App\Cart;
use App\Order;
use App\Transaction;
use Illuminate\Http\Request;
use App\Product;
use App\User;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //

    public function index()
    {
        $products = Auth::user()->cart_products()->get();
        $price = 0;

        foreach ($products as $product) {
            $price += $product->price * $product->pivot->quantity;
        }
        return view('home.cart', compact('products', 'price'));
    }

    public function addToCart($id)
    {
        if(!Auth::check()) {
            session()->put('error', 'Molimo prijavite se ili registrirajte kako biste mogli kupiti proizvod.');
            return redirect()->route('home');
        }

        $cart = new Cart();
        $products = Auth::user()->cart_products()->get();

        foreach($products as $product) {
             if($product->pivot->product_id == $id) {
                 session()->put(["error" => "Proizvod je već u košarici."]);
                 return redirect()->route('home');
             }
        }

        $cart->user_id = Auth::user()->id;
        $cart->product_id = $id;
        $cart->quantity = 1;

        $save = $cart->save();

        if($save) {
            session()->put(["success" => "Proizvod je dodan u košaricu"]);
        }

        return redirect()->route('home');
    }

    public function deleteFromCart($id)
    {
        Auth::user()->cart_products()->detach($id);

        session()->put(["success" => "Proizvod je izbrisan iz košarice"]);

        return redirect()->route('cart');
    }

    public function updateCart(Request $request, $id)
    {
        Auth::user()->cart_products()->updateExistingPivot($id, ['quantity' => $request->quantity]);

        session()->put(["success" => "Košarica je ažurirana"]);

        return redirect()->route('cart');
    }

    public function buyProducts()
    {   $user = Auth::user();

        $products = $user->cart_products()->get();

        foreach ($products as $product) {

            if($product->pivot->quantity > $product->quantity) {
                session()->put("error", "Nedovoljno " . $product->title . ".");
                return redirect()->route('cart');
            }
        }

        $transaction = new Transaction();
        $transaction->user_id = $user->id;
        $transaction->save();

        foreach ($products as $product) {
            $order = new Order();
            $order->transaction_id = $transaction->id;
            $order->product_id = $product->id;
            $order->quantity = $product->pivot->quantity;
            $order->save();

            $product_update = Product::find($product->id);
            $product_update->quantity = $product_update->quantity - $product->pivot->quantity;
            $product_update->save();
        }

        $user->cart_products()->detach();

        session()->put('success', 'Uspješno ste kupili proizvod');

        return redirect()->route('cart');
    }
}
