@extends('admin.header')

@section('content')
        <h1>Dodaj proizvod</h1>

            @include('errors.error')

            {!! Form::open(['method'=>'POST', 'action'=>'ProductController@store', 'files' => true]) !!}

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
                        {!! Form::label('category_id', 'Kategorija:') !!}
                        {!! Form::select('category_id', ['' => 'Izaberi kategoriju'] + $categories, null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('brand_id', 'Vrsta cvijeća:') !!}
                        {!! Form::select('brand_id', ['' => 'Izaberi vrstu cvijeća'] + $brands, null, ['class'=>'form-control']) !!}
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
                        {!! Form::submit('Dodaj novi proizvod', ['class'=>'btn btn-success']) !!}
                    </div>

                {!! Form::close() !!}

@endsection