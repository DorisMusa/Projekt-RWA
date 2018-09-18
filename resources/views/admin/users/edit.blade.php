@extends('admin.header')

@section('content')

    <h1>Ažuriraj korisnika</h1>
    <br>

    <div class="col-sm-3">
        <img src="{{isset($user->file) ? asset($user->file) : ""}}" alt="" class="img-responsive img-rounded">
    </div>
    <div class="col-sm-9">

        @include('errors.error')

        {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUserController@update', $user->id], 'files'=>'true']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Ime:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('role_id', 'Uloga:') !!}
                {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('is_active', 'Status:') !!}
                {!! Form::select('is_active', array(1=> 'Active', 0=>'Not Active'), null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Lozinka:') !!}
                {!! Form::password('password', ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('repeat_password', 'Ponovi lozinku:') !!}
                {!! Form::password('repeat_password', ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('file', 'Datoteka:') !!}
                {!! Form::file('file') !!}
            </div>

            <div class="form-group">

                {!! Form::submit('Ažuriraj korisnika', ['class'=>'btn btn-success']) !!}
            </div>


        {!! Form::close() !!}
    </div>
@endsection