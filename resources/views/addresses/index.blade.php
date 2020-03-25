@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <h1>Cyfeiriadau</h1>
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
                        <th>Colofn 1</th>
                        <th>Colofn 2</th>
                        <th>Colofn 3</th>
                        <th>Cod Post</th>
                        <th>Nifer</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($addresses as $address)
                    <tr>
                        <td>{{ $address->address_1 }}</td>
                        <td>{{ $address->address_2 }}</td>
                        <td>{{ $address->address_3 }}</td>
                        <td>{{ $address->postcode }}</td>
                        <td>{{ $address->resident_count }}</td>
                        <td>
                            <a href="{{ route('addresses.show', $address) }}" class="btn btn-sm btn-primary">Gweld</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            {{ $addresses->links() }}
        </div>
    </div>
</div>
@endsection