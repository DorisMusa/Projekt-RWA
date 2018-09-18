@extends('admin.header')

@section('content')


    <div class="col-sm-6">
        <h1>Kategorije</h1>

        <table class="table table-hover">
            <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Kreirano</th>
                <th>Ažurirano</th>
              </tr>
            </thead>
            @if($categories)
                    <tbody>
                    @foreach($categories as $category)
                          <tr>
                            <td>{{$category->id}}</td>
                            <td><a href="{{route('categories.edit', $category->id)}}">{{$category->name}}</a></td>
                            <td>{{$category->created_at ? $category->created_at->diffForHumans() : ""}}</td>
                            <td>{{$category->updated_at ? $category->updated_at->diffForHumans() : ""}}</td>
                          </tr>
                    @endforeach
                    </tbody>
            @endif
        </table>
    </div>

    <div class="col-sm-6">
            <h1>Dodaj kategoriju</h1>

            @include('errors.error')

            {!! Form::open(['method'=>'POST', 'action'=>'CategoryController@store']) !!}

                    <div class="form-group">
                        {!! Form::label('name', 'Naziv:') !!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Dodaj kategoriju', ['class'=>'btn btn-success']) !!}
                    </div>

            {!! Form::close() !!}
    </div>
@endsection