@extends('admin.header')

@section('content')
    <h1>Proizvodi</h1>
    <br>

    <div class="col-sm-2" style="display: inline-block">
        <div class="nav nav-stacked">

            <li class="active" style="background-color: #f38181;"><a href="#"><h4>Kategorije</h4></a></li>

            @if($categories)
                @foreach($categories as $category)

                    <li><a href="{{route('admin_category', $category->id)}}">{{$category->name}}</a></li>

                @endforeach
            @endif
        </div>


        <div class="nav nav-stacked">
            <li class="active" style="background-color: #f38181"><a href="#"><h4>Vrste cvijeća</h4></a></li>

            @if($brands)
                @foreach($brands as $brand)

                    <li><a href="{{route('admin_brand', $brand->id)}}">{{$brand->name}}</a></li>

                @endforeach
            @endif

        </div>
        </div>
    </div>

    <div class="col-sm-10" style="display: inline-block">
    <table class="table table-hover">
        <thead>
          <tr>
            <th>Id</th>
            <th>Naziv</th>
            <th>Vrsta cvijeća</th>
            <th>Kategorija</th>
            <th>Cijena</th>
            <th>Slika</th>
            <th>Količina</th>
            <th>Opis</th>
            @if(Auth::user()->role->name == 'admin')
                 <th>Dodao:</th>
            @endif
            <th>Dodano</th>
            <th>Ažurirano</th>
            <th>Izbrisano</th>
          </tr>
        </thead>
        @if($products)
            <tbody>
            @foreach($products as $product)
                  <tr>
                    <td>{{$product->id}}</td>
                    <td><a href="{{route('products.edit', $product->id)}}">{{$product->title}}</a></td>
                    <td>{{$product->brand->name}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>{{$product->price}}</td>
                    <td><img src="{{($product->file) ? asset($product->file) : ""}}" alt="" height="40" width="40"></td>
                    <td>{{$product->quantity}}</td>
                    <td>{{str_limit($product->description, 10)}}</td>
                      @if(Auth::user()->role->name == 'admin')
                            <td>{{isset($product->user->name) ? $product->user->name : "Deleted"}}</td>
                      @endif
                    <td>{{$product->created_at->diffForHumans()}}</td>
                    <td>{{$product->updated_at->diffForHumans()}}</td>
                    <td>
                        {!! Form::open(['method'=>'DELETE', 'action'=>['ProductController@destroy',$product->id]]) !!}

                        <div class="form-group">
                                {!! Form::submit('Izbriši', ['class'=>'btn btn-warning']) !!}
                        </div>

                        {!! Form::close() !!}
                    </td>
                  </tr>
            @endforeach
            </tbody>
        @endif
      </table>
    </div>
@endsection