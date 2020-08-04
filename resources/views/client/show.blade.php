@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Client: {{ $client->firstname }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/client">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3>Details</h3>
            <table class="table">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                </tr>
                <tr>
                    <td>{{ $client->firstname }}</td>
                    <td>{{ $client->lastname }}</td>
                    <td>{{ $client->address }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->email }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
