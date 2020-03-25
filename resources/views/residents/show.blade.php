@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h1>{{ $resident->fullName }} <small><a href="{{ route('residents.edit', $resident) }}" class="btn btn-sm btn-primary">Newid</a></small></h1>

            <div class="card">
                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Label</th>
                            <th>Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Rhif Etholiadol</td>
                            <td>{{ $resident->elector_number }}</td>
                        </tr>
                        <tr>
                            <td>Statws</td>
                            <td>{{ $resident->status }}</td>
                        </tr>
                        <tr>
                            <td>Enw Cyntaf</td>
                            <td>{{ $resident->firstname }}</td>
                        </tr>
                        <tr>
                            <td>Enw(au) Canol</td>
                            <td>{{ $resident->initials }}</td>
                        </tr>
                        <tr>
                            <td>Cyfenw</td>
                            <td>{{ $resident->surname }}</td>
                        </tr>
                        <tr>
                            <td>Ebost</td>
                            <td>{{ $resident->email }}</td>
                        </tr>
                        <tr>
                            <td>Rhif Ffon Cartref</td>
                            <td>{{ $resident->home_telephone }}</td>
                        </tr>
                        <tr>
                            <td>Rhif Ffon Mobile</td>
                            <td>{{ $resident->mobile_telephone }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm">
            <h1>Cyfeiriad</h1>

            <address>
                @foreach(['address_1', 'address_2', 'address_3', 'address_4'] as $line) 
                @if ($resident->address->{$line} !== '')
                {{ $resident->address->{$line} }}<br />
                @endif
                @endforeach
                {{ $resident->address->postcode }}
            </address>

            <p></p><a href="{{ route('addresses.show', $resident->address) }}" class="btn btn-secondary">Gweld Cyfeiriad</a></p>
        </div>
    </div>
</div>
@endsection