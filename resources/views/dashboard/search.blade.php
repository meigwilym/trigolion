@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <h1>Canlyniadau</h1>

            <p>{{ count($results) }} canlyniad wrth chwilio am <strong>"{{ $term }}"</strong>. </p>

        </div>
        <div class="col-sm-4">
        <div class="float-right">
            @include('dashboard.form')
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Canlyniad</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($results as $result)
                    <tr>
                        <td>{{ $result->id }}</td>
                        <td>{{ $result->result }}</td>
                        <td>
                            @if ($result->type === 'resident')
                            <a href="{{ route('residents.show', $result->id) }}" class="btn btn-sm btn-primary">Dangos</a>
                            @elseif ($result->type === 'address')
                            <a href="{{ route('addresses.show', $result->id) }}" class="btn btn-sm btn-primary">Dangos</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection