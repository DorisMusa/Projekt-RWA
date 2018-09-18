@extends('home.header')

@section('content')
<p><br/></p>
<p><br/></p>
<p><br/></p>

<form method="post" action="{{ route('login') }}">
    @csrf

    <div class="col-md-4">
<div clas="panel" style="color: #f38181">
    <div style="text-align: center; font-size: 25px;">Testni podaci</div>
    <div class="panel-body">
        <div class="panel-heading"><h6 style="text-align: center; font-size: 20px;">Admin</h6></div>
        <div>
            E-mail: admin@gmail.com
            <br><br>
            Lozinka: 123456
        </div>
        <div class="panel-heading"><h6 style="text-align: center; font-size: 20px;">Moderator</h6></div>
        <div>
            E-mail: moderator@gmail.com
            <br><br>
            Lozinka: 123456
        </div>


        <div class="panel-heading"><h6 style="text-align: center; font-size: 20px;">User</h6></div>
        <div>
            E-mail: user@gmail.com
            <br><br>
            Lozinka: 123456
        </div>

    </div>

</div>


    </div>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">

            <div class="panel" style="background: rgba(243,129,129,0.9); /* fallback for old browsers */ /* Chrome 10-25, Safari 5.1-6 */
	background: -webkit-linear-gradient(top, rgba(243,129,129,0.9), rgba(252, 227, 138, 0.9));
	background: -o-linear-gradient(top, rgba(243,129,129,0.9), rgba(252, 227, 138, 0.9));
	background: linear-gradient(to bottom, rgba(243,129,129,0.9), rgba(252, 227, 138, 0.9)); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	color: white;">

                <div class="panel-heading"><h2 style="text-align: center; font-size: 40px;">Prijava</h2></div>
                <div class="panel-body">

                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label text-md-right">E-mail adresa</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Unesite e-mail adresu..."  name="email" value="{{ old('email') }}" required autofocus>

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
                            <input id="password" type="password" placeholder="Unesite lozinku..." class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" style="background-color: white; color:black"  name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Zapamti me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <a href="{{route('register')}}" class="col-sm-8 col-form-label text-md-right" style="color:white">Nemate račun, registrirajte se</a>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="login" style="background: white; color: rgba(243,129,129,0.9); font-size: 30px; border-radius: 20px;  border:none;
    outline:none;">
                                Prijavite se
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
    @endsection

