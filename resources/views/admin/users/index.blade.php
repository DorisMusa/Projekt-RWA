@extends('admin.header')

@section('content')

    <h1>Korisnici</h1>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Ime</th>
            <th>Email</th>
            <th>Uloga</th>
            <th>Status</th>
            <th>Slika</th>
            <th>Dodano</th>
            <th>Ažurirano</th>
            <th>Izbrisano</th>
        </tr>
        </thead>
        @if($users)
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role->name}}</td>
                    <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                    <td><img src="{{($user->file) ? asset($user->file) : ""}}" alt="" height="40" width="40"></td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                    <td>

                            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUserController@destroy',$user->id]]) !!}

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
@endsection