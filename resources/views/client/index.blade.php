@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Clients</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/client/create">Create New Client</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                @foreach ($clients as $client)
                    <tr>
                        <td>
                            <a href="/client/{{ $client->id }}">{{ $client->firstname }}</a>
                        </td>
                        <td>
                            <a href="/client/{{ $client->id }}/edit">Edit</a>
                        </td>
                        <td>
                            <a href="/client/{{ $client->id }}/confirmDelete">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
