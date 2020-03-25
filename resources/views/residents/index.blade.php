@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <h1>Trigolion</h1>
        </div>
        <div class="col-sm">
            <div class="float-right">
            @include('dashboard.form', ['term' => ''])
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table role="table" class="table  table-striped">
                <thead>
                    <tr>
                        <th>Rhif Etholiadol</th>
                        <th>Statws</th>
                        <th>Enw</th>
                        <th>Ebost</th>
                        <th>Ffon Cartref</th>
                        <th>Ffon Mobile</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($residents as $resident)
                    <tr>
                        <td>{{ $resident->elector_number }}</td>
                        <td>{{ $resident->status }}</td>
                        <td>{{ $resident->fullName }}</td>
                        <td>{{ $resident->email }}</td>
                        <td>{{ $resident->home_telephone }}</td>
                        <td>{{ $resident->mobile_telephone }}</td>
                        <td>
                            <a href="{{ route('residents.show', $resident) }}" class="btn btn-sm btn-primary">Gweld</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            {{ $residents->links() }}
        </div>
    </div>
</div>
@endsection