@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Edit Client {{ $client->firstname }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/client">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/client/{{ $client->id }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="title">First Name:</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Type a First Name" value="{{ $client->firstname }}">
                    <label for="title">Last Name:</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Type a Last Name" value="{{ $client->lastname }}">
                    <label for="title">Address:</label>
                    <textarea class="form-control" name="address" id="address" rows="8">{{ $client->address }}</textarea>
                    <label for="title">Phone:</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Type a Phone" value="{{ $client->phone }}">
                    <label for="title">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Type a Email" value="{{ $client->email }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
