@extends('home.header')

@section('content')

    <p><br/></p>
    <p><br/></p>
    <p><br/></p>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="cart_msg">
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        <p>{{session()->pull('success')}}</p>
                    </div>
                @endif

                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            <p>{{session()->pull('error')}}</p>
                        </div>
                    @endif
                <div class="panel">
                    <div class="panel-heading" style="background-color:#f38181">Kupnja</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-2 col-xs-2"><b>Akcija</b></div>
                            <div class="col-md-2 col-xs-2"><b>Slika proizvoda</b></div>
                            <div class="col-md-2 col-xs-2"><b>Ime proizvoda</b></div>
                            <div class="col-md-2 col-xs-2"><b>Količina</b></div>
                            <div class="col-md-2 col-xs-2"><b>Cijena</b></div>
                            <div class="col-md-2 col-xs-2"><b>Ukupno</b></div>
                        </div>


                        <div id="cart_checkout"></div>
                        @if($products)
                            @foreach($products as $product)
                                <div class="row">
                                    <form action="{{route('update_cart', $product->id)}}" method="post">

                                        {{ csrf_field() }}

                                        <div class="col-md-2">
                                            <div class="btn-group">
                                                <a href="{{route('delete_cart', $product->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span></a>
                                                <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-ok-sign"></span></button>
                                            </div>
                                        </div>
                                        <div class="col-md-2"><img src='{{asset($product->file)}}' width="50" height="50"></div>
                                        <div class="col-md-2">{{$product->title}}</div>
                                        <div class="col-md-2"><input type='text' class='form-control' value='{{$product->pivot->quantity}}' name="quantity" id="quantity"></div>
                                        <div class="col-md-2"><input type='text' class='form-control' value='{{$product->price}}' disabled></div>
                                        <div class="col-md-2"><input type='text' class='form-control' value='{{$product->pivot->quantity * $product->price}}' disabled></div>
                                    </form>

                                </div>
                            @endforeach
                        @endif
                        <div class="row">
                            <div class="col-md-8"></div>
                            <div class="col-md-4">
                                <h4><b>Ukupno: {{$price}} KM</b></h4>
                                <a href="{{route('buy')}}"><button type="button" class="btn btn-success">Kupi</button></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>

        </div>
    </div>
@endsection