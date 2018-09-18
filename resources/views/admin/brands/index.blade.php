@extends('admin.header')

@section('content')


    <div class="col-sm-6">
        <h1>Vrste cvijeća</h1>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>Id</th>
                <th>Naziv</th>
                <th>Kreirano</th>
                <th>Ažurirano</th>
            </tr>
            </thead>
            @if($brands)
                <tbody>
                @foreach($brands as $brand)
                    <tr>
                        <td>{{$brand->id}}</td>
                        <td><a href="{{route('brands.edit', $brand->id)}}">{{$brand->name}}</a></td>
                        <td>{{$brand->created_at->diffForHumans()}}</td>
                        <td>{{$brand->updated_at->diffForHumans()}}</td>
                    </tr>
                @endforeach
                </tbody>
            @endif
        </table>
    </div>

    <div class="col-sm-6">
        <h1>Dodaj vrstu cvijeća</h1>

        @include('errors.error')

        {!! Form::open(['method'=>'POST', 'action'=>'BrandController@store']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Naziv:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Dodaj vrstu cvijeća', ['class'=>'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection