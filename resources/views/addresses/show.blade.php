@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div class="card">
                <div class="card-header">
                    Aelwyd
                </div>
                <div class="card-body">
                    <address>
                        @foreach(['address_1', 'address_2', 'address_3', 'address_4'] as $line) 
                        @if ($address->{$line} !== '')
                        {{ $address->{$line} }}<br />
                        @endif
                        @endforeach
                        {{ $address->postcode }}
                    </address>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-sm-6 offset-sm-3">
            <div class="card">
                <div class="card-header">
                    Trigolion
                </div>

                    <ul class="list-group list-group-flush">
                    @foreach ($address->residents as $resident) 
                    <li class="list-group-item"><a href="{{ route('residents.show', $resident) }}">{{ $resident->fullName }}</a></li>
                    @endforeach
                    </ul>

                <div class="card-footer">
                    <p class="card-text text-right"><a href="{{ route('addresses') }}">Yn ol i'r rhestr</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection