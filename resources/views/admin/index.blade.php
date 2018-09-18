@extends('admin.header')

@section('content')
    <h1 style="color: #f38181;">Dobrodošao {{Auth::user()->name}}</h1>

    <div class="col-lg-8" style="color: #f38181; font-size: large">
        U projektu su implementirane tri vrste korisnika. To su Admin, Moderator te User. Admin je super korisnik,
        tj. ima mogućnost prikaza, dodavanja, ažuriranja i
        brisanja svih korisnika, proizvoda, kategorija te vrsta cvijeća. <br/> <br/>

        Moderator ima mogućnost prikaza proizvoda, kategorija i vrsta cvijeća, kao i dodavanje istih. <br/> <br/>


        User ima najmanje ovlasti. Ima mogućnost pregleda svih proizvoda te kupnje istih.
    </div>
@endsection