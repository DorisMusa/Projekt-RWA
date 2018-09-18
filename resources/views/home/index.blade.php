@extends('home.header')

@section('content')
    <p><br/></p>
    <p><br/></p>
    <p><br/></p>



<div class="container-fluid">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2 col-xs-12">



            <div class="nav">

                <li class="active" style="background-color: #f38181"><a href="#"><h4>Kategorije</h4></a></li>

                @if($categories)
                    @foreach($categories as $category)

                         <li><a href="{{route('category', $category->id)}}">{{$category->name}}</a></li>

                    @endforeach
                @endif
            </div>

            <div class="nav">
                <li class="active" style="background-color: #f38181"><a href="#"><h4>Vrste cvijeća</h4></a></li>

                @if($brands)
                    @foreach($brands as $brand)

                        <li><a href="{{route('brand', $brand->id)}}">{{$brand->name}}</a></li>

                    @endforeach
                @endif

            </div>
        </div>



        <div class="col-md-8 col-xs-12">

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
            <div class="panel panel-warning">
                <div class="panel-heading" style="background-color: #f38181">Proizvodi</div>


                <div class="panel-body">
                    @if($products)
                        @foreach($products as $product)
                            <div class="col-md-4">
                                <div class="panel panel-warning">
                                    <div class="panel-heading" style="background-color: #f38181">{{$product->title}}</div>
                                    <div class="panel-body">

                                        <img src="{{asset($product->file)}}" height="150" width="150"/>
                                    </div>
                                    <div class="panel-heading" style="background-color: #f38181">{{$product->price}} KM
                                        <a href="{{route('add_cart', $product->id)}}"><button style="float:right;" class="btn btn-success btn-xs">Dodaj u košaricu</button></a>
                                        <a href="{{route('details', $product->id)}}"><button style="float:right;" class="btn btn-info btn-xs">Detalji</button></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>




                <div class="panel-footer" style="background-color: #f38181; color:white">
                    <div class="card-header text-center"><h3>Korištene tehnologije</h3></div>
                    <table class="table  table-bordered">
                        <thead >
                        <tr>
                            <th>Frontend</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr style="text-align:left;">
                            <td>
                                <img src="{{ asset('images/html.png') }}" width="70" height="70">  <strong> HTML5</strong>-Osnovna struktura stranice
                            </td>
                            <td>
                                <img src="{{ asset('images/css.jpg') }}" width="70" height="70">  <strong> CSS</strong>-Dizajn stranice
                            </td>
                            <td>
                                <img src="{{ asset('images/js.png') }}" width="70" height="70">  <strong> JavaScript</strong>-Dodatne funkcionalnost
                            </td>
                        </tr>
                        <tr style="text-align:left;">
                            <td>
                                <img src="{{ asset('images/jQuery.png') }}" width="70" height="70">  <strong> jQuery</strong>-Dodatne funkcionalnosti
                            </td>
                            <td>
                                <img src="{{ asset('images/bootstrap.png') }}" width="70" height="70">  <strong> BOOTSTRAP</strong>-Napredni dizajn stranice
                            </td>
                        </tr>

                        </tbody>
                    </table>

                <div class="col-sm">

                    <table class="table table-bordered">
                        <thead>
                        <tr >
                            <th scope="col">Backend</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr style="text-align:left;">
                            <td>
                                <img src="{{ asset('images/laravel.png') }}" width="70" height="70">  <strong>  LARAVEL</strong>-PHP framework
                            </td>

                            <td>
                                <img src="{{ asset('images/phpMyAdmin.png') }}" width="70" height="70">  <strong>  phpMyAdmin</strong>-Baza podataka
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                    <div class="form-inline form-group">
                        <div class="form-group">
                            <label>Datum:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="sample-date"  />
                                <span class="input-group-btn">
						        <button type="button" class="btn btn-default" data-toggle="datepicker" data-target-name="sample-date"><span class="glyphicon glyphicon-calendar"></span>
      </button>
      </span>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        <div class="col-md-1"></div>



</div>
    @endsection