@extends('home.header')

@section('content')
    <p><br/></p>
    <p><br/></p>
    <p><br/></p>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">



            <div class="panel" style="background: rgba(243,129,129,0.9); /* fallback for old browsers */ /* Chrome 10-25, Safari 5.1-6 */
	background: -webkit-linear-gradient(top, rgba(243,129,129,0.9), rgba(252, 227, 138, 0.9));
	background: -o-linear-gradient(top, rgba(243,129,129,0.9), rgba(252, 227, 138, 0.9));
	background: linear-gradient(to bottom, rgba(243,129,129,0.9), rgba(252, 227, 138, 0.9)); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	color: white;">
                <div class="panel-heading"><h2 style="text-align: center; font-size: 40px;">Registracija</h2></div>
                <div class="panel-body">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Ime</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Unesite ime..." name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-mail adresa</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Unesite e-mail adresu..." name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Lozinka</label>

                            <div class="col-md-6">
                                <input id="password" type="password" style="background:white; color: black" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Unesite lozinku..." name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Potvrdite lozinku</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" style="background: white; color:black" placeholder="Ponovno unesite lozinku..." name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="register" style="background: white; color: rgba(243,129,129,0.9); font-size: 30px; border-radius: 20px;  border:none;
    outline:none;">
                                    Registrirajte se
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


