@extends('admin.header')

@section('content')
    <div class="col-sm-6">
        <h1>Izbrisane vrste cvijeća</h1>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>Id</th>
                <th>Naziv</th>
                <th>Izbriši</th>
                <th>Vrati</th>
            </tr>
            </thead>
            @if($brands)
                <tbody>
                @foreach($brands as $brands)
                    <tr>
                        <td>{{$brands->id}}</td>
                        <td><a href="{{route('brands.edit', $brands->id)}}">{{$brands->name}}</a></td>
                        <td><a href="{{route('brand.permanent', $brands->id)}}"><button class="btn btn-warning">Izbriši</button></a></td>
                        <td><a href="{{route('brand.restore', $brands->id)}}"><button class="btn btn-success">Vrati</button></a></td>
                    </tr>
                @endforeach
                </tbody>
            @endif
        </table>
    </div>
@endsection