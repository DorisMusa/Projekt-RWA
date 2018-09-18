@extends('home.header')

@section('content')
    <br><br><br><br>

    <h1>Kupnje</h1>
    @if($transactions)
            <div class="col-sm-4">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Id transakcije</th>
                        <th>Korisnik</th>
                        <th>Datum kupnje</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($transactions as $transaction)
                        <tr>
                            <td>{{$transaction->id}}</td>
                            <td>{{$transaction->user->name}}</td>
                            <td><a href="{{route('order', $transaction->id)}}">{{$transaction->created_at}}</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    @endif

    @if($orders)
        <div class="col-sm-8">

            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Naziv</th>
                    <th>Slika</th>
                    <th>Cijena</th>
                    <th>Količina</th>
                    <th>Ukupno</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->product->title}}</td>
                        <td><img src="{{asset($order->product->file)}}" height="50" width="50" alt=""></td>
                        <td>{{$order->product->price}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->quantity * $order->product->price}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection