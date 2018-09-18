@extends('admin.header')

@section('content')

    <h1>Dodaj korisnika</h1>

    @include('errors.error')

    {!! Form::open(['method'=>'POST', 'action'=>'AdminUserController@store', 'files' => true]) !!}

        <div class="form-group">
            {!! Form::label('name', 'Ime:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('role_id', 'Uloga:') !!}
            {!! Form::select('role_id', ['' => 'Izaberi ulogu'] + $roles, null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('is_active', 'Status:') !!}
            {!! Form::select('is_active', ['' => 'Status', '0' => 'Not Active', '1' => 'Active'], null, ['class'=>'form-control']) !!}
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
            {!! Form::submit('Dodaj korisnika', ['class'=>'btn btn-success']) !!}
        </div>

    {!! Form::close() !!}
@endsection