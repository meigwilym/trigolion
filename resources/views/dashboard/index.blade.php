@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div class="card">
                <div class="card-body">
                    <h1>Chwilio</h1>
                    @include('dashboard.form', ['term' => ''])
                    <p class="card-text">Chwilio am berson neu gyfeiriad. </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection