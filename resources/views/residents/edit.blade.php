@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h1>Golygu Trigolyn</h1>

            <p>Gellir ychwanegu manylion yma. Dylid ond cywiro sillafiad enw, nid eu newid. </p>

            <form action="{{ route('residents.show', $resident) }}" method="POST">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="firstname">Enw Cyntaf</label>
                    <input type="text" id="firstname" name="firstname" value="{{ old('firstname', $resident->firstname) }}" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="initials">Enw(au) Canol</label>
                    <input type="text" id="initials" name="initials" value="{{ old('initials', $resident->initials) }}" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="surname">Cyfenw</label>
                    <input type="text" id="surname" name="surname" value="{{ old('surname', $resident->surname) }}" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="email">Ebost</label>
                    <input type="text" id="email" name="email" value="{{ old('email', $resident->email) }}" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="home_telephone">Rhif Ffon Cartref</label>
                    <input type="text" id="home_telephone" name="home_telephone" value="{{ old('home_telephone', $resident->home_telephone) }}" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="mobile_telephone">Rhif Ffon Mobile</label>
                    <input type="text" id="mobile_telephone" name="mobile_telephone" value="{{ old('mobile_telephone', $resident->mobile_telephone) }}" class="form-control" />
                </div>

                <button type="submit" class="btn btn-primary">Cadw</button> neu <a href="{{ route('residents.show', $resident) }}" class="text-warning" title="Dychwelyd i dudalen {{ $resident->fullName }}">Canslo</a>
            </form>
        </div>
    </div>
</div>
@endsection