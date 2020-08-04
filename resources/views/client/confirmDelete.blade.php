@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Delete Client {{ $client->firstname }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/client">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="/client/{{ $client->id }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-primary">Delete</button>
            </form>
        </div>
    </div>
@endsection
