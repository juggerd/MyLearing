<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class ClientController extends Controller
{

    public function list() {
        $clients=Client::all();
        return view('pages.list',['clients'=> $clients]);
    }


    public function add() {
        $form_caption='Добавление нового клиента';
        return view('pages.form_add_edd',['form_caption'=>$form_caption]);
    }

    public function edit(Request $request) {
        $form_caption='Изменение данных клиента';
        $client = Client::findOrFail($request->id);
        return view('pages.form_add_edd',
                    ['client'=>$client],
                    ['form_caption'=>$form_caption]);    

    }
    public function create(Request $request) {
        $client= new Client;
        $client->surname      =   $request->input('surname');
        $client->name         =   $request->input('name');
        $client->patronymic   =   $request->input('patronymic');
        $client->birthday     =   $request->input('birthday');
        $client->save();
        return redirect(route('client.list'));
    }

    public function update(Request $request) {
        $client= Client::findOrFail($request->id);
        $client->surname      =   $request->input('surname');
        $client->name         =   $request->input('name');
        $client->patronymic   =   $request->input('patronymic');
        $client->birthday     =   $request->input('birthday');
        $client->update();
        return redirect(route('client.list'));
    }


    public function del(Request $request) {
        $client= Client::findOrFail($request->id);
        $client->delete();
        return redirect(route('client.list'));
    }
}
