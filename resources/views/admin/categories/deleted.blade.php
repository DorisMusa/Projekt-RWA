@extends('admin.header')

@section('content')
    <div class="col-sm-6">
        <h1>Izbrisane kategorije</h1>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>Id</th>
                <th>Naziv</th>
                <th>Izbriši</th>
                <th>Vrati</th>
            </tr>
            </thead>
            @if($categories)
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td><a href="{{route('categories.edit', $category->id)}}">{{$category->name}}</a></td>
                        <td><a href="{{route('category.permanent', $category->id)}}"><button class="btn btn-warning">Izbriši</button></a></td>
                        <td><a href="{{route('category.restore', $category->id)}}"><button class="btn btn-success">Vrati</button></a></td>
                    </tr>
                @endforeach
                </tbody>
            @endif
        </table>
    </div>
@endsection