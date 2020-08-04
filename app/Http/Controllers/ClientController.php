<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('client.index',  [
            'clients' => Client::all()
        ]);
    }

    public function create()
    {
        return view('client.create');
    }

    public function store(Request $request)
    {
        $validaData = $request->validate([
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'address' => 'required|min:3',
            'phone' => 'required|min:3',
            'email' => 'required|min:3'
        ]);

        $report = new Client();
        $report->firstname = $validaData['firstname'];
        $report->lastname = $validaData['lastname'];
        $report->address = $validaData['address'];
        $report->phone = $validaData['phone'];
        $report->email = $validaData['email'];
        $report->save();

        return redirect('/client');
    }

    public function show(Client $client)
    {
        return view('client.show', [
            'client' => $client
        ]);
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('client.edit', [
            'client' => $client
        ]);
    }

    public function update(Request $request, $id)
    {
        $validaData = $request->validate([
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'address' => 'required|min:3',
            'phone' => 'required|min:3',
            'email' => 'required|min:3'
        ]);

        $report = Client::findOrFail($id);
        $report->firstname = $validaData['firstname'];
        $report->lastname = $validaData['lastname'];
        $report->address = $validaData['address'];
        $report->phone = $validaData['phone'];
        $report->email = $validaData['email'];
        $report->save();

        return redirect('/client/');
    }

    public function destroy($id)
    {
        $report = Client::findOrFail($id);
        $report->delete();

        return redirect('/client');
    }

    public function confirmDelete($id) {
        $client = Client::findOrFail($id);
        return view('client.confirmDelete', [
            'client' => $client
        ]);
    }
}
