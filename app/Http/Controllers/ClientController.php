<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class ClientController extends Controller
{

    public function list() {
        $clients=Client::all();
        return view('pages.client.list',['clients'=> $clients]);
    }


    public function add() {
        return view('pages.client.form_add');
    }

    public function edit(Request $request) {

        $client = Client::findOrFail($request->id);
        return view('pages.client.form_edd',['client'=>$client]);

    }

    public function create(Request $request) {
        $validator = Validator::make($request->all(), [
            'surname'    => 'required',
            'name'       => 'required',
            'patronymic' => 'required',
            'birthday'   => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        $valid = $validator->getData();

        $client= new Client;
        $client->surname      =   $valid['surname'];
        $client->name         =   $valid['name'];
        $client->patronymic   =   $valid['patronymic'];
        $client->birthday     =   $valid['birthday'];
        $client->save();
        return redirect(route('client.list'));
    }

    public function update(Request $request) {
        $validator = Validator::make($request->all(), [
            'surname'    => 'required',
            'name'       => 'required',
            'patronymic' => 'required',
            'birthday'   => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        $valid = $validator->getData();

        $client= Client::findOrFail($valid['id']);
        $client->surname      =   $valid['surname'];
        $client->name         =   $valid['name'];
        $client->patronymic   =   $valid['patronymic'];
        $client->birthday     =   $valid['birthday'];
        $client->update();
        return redirect(route('client.list'));
    }


    public function del(Request $request) {
        $client= Client::findOrFail($request->id);
        $client->delete();
        return redirect(route('client.list'));
    }



}
