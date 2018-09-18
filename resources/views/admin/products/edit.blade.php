@extends('admin.header')

@section('content')
    <h1>Ažuriraj proizvod</h1>

    @include('errors.error')

    <div class="col-sm-3">
        <img src="{{isset($product->file) ? asset($product->file) : ""}}" alt="" class="img-responsive img-rounded">
    </div>


    <div class="col-sm-9">
    {!! Form::model($product, ['method'=>'PATCH', 'action'=>['ProductController@update', $product->id], 'files' => true]) !!}

    <div class="form-group">
        {!! Form::label('title', 'Naziv:') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('price', 'Cijena:') !!}
        {!! Form::text('price', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('quantity', 'Količina:') !!}
        {!! Form::text('quantity', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id', 'Kategorja:') !!}
        {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('brand_id', 'Vrsta cvijeća:') !!}
        {!! Form::select('brand_id', $brands, null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Opis:') !!}
        {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('file', 'Datoteka:') !!}
        {!! Form::file('file') !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Ažuriraj proizvod', ['class'=>'btn btn-success']) !!}
    </div>

    {!! Form::close() !!}
    </div>
@endsection