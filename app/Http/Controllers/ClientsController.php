<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function list()
    {
        $clients = Client::all();

        return view('pages.clients.list', [
            'clients' => $clients,
        ]);
    }

    public function add()
    {
        return view('pages.clients.add');
    }

    public function save(Request $request)
    {
        $client = new Client();
        $client->name = $request->input('name');
        $client->surname = $request->input('surname');
        $client->patronymic = $request->input('patronymic');
        if ($request->input('age')) {
            $client->age = $request->input('age');
        }
        $client->save();

        return redirect()->route('clients');
    }

    public function edit(Request $request)
    {
        $client = Client::where('id', $request->input('id'))->firstOrFail();

        return view('pages.clients.edit', [
            'client' => $client,
        ]);
    }

    public function update(Request $request)
    {
        $client = Client::where('id', $request->input('id'))->firstOrFail();
        $client->name = $request->input('name');
        $client->surname = $request->input('surname');
        $client->patronymic = $request->input('patronymic');
        if ($request->input('age')) {
            $client->age = $request->input('age');
        }
        $client->save();

        return redirect()->route('clients');
    }

    public function delete(Request $request)
    {
        $client = Client::where('id', $request->input('id'))->firstOrFail();
        $client->delete();
        return redirect()->route('clients');
    }
}
