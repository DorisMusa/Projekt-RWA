@extends('admin.header')

@section('content')

    <div class="col-sm-12" style="display: inline-block">

        <h1>Izbrisani proizvodi</h1>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>Id</th>
                <th>Naziv proizvoda</th>
                <th>Vrsta cvijeća</th>
                <th>Kategorija</th>
                <th>Cijena</th>
                <th>Slika</th>
                <th>Količina</th>
                <th>Opis</th>
                <th>Dodao korisnik</th>
                <th>Dodano</th>
                <th>Ažurirano</th>
                <th>Izbrisano</th>
                <th>Vraćeno</th>
            </tr>
            </thead>
            @if($products)
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->title}}</td>
                        <td>{{isset($product->brand->name) ? $product->brand->name : "Deleted"}}</td>
                        <td>{{isset($product->category->name) ? $product->category->name : "Deleted"}}</td>
                        <td>{{$product->price}}</td>
                        <td><img src="{{($product->file) ? asset($product->file) : ""}}" alt="" height="40" width="40"></td>
                        <td>{{$product->quantity}}</td>
                        <td>{{str_limit($product->description, 10)}}</td>
                        <td>{{isset($product->user->name) ? $product->user->name : "Deleted"}}</td>
                        <td>{{$product->created_at->diffForHumans()}}</td>
                        <td>{{$product->updated_at->diffForHumans()}}</td>
                        <td><a href="{{route('product.permanent', $product->id)}}"><button class="btn btn-warning">Izbriši</button></a></td>
                        <td><a href="{{route('product.restore', $product->id)}}"><button class="btn btn-success">Vrati</button></a></td>
                    </tr>
                @endforeach
                </tbody>
            @endif
        </table>
    </div>
@endsection