<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Reestr;

class ReestrController extends Controller
{
  public function list(Request $request) {
      $reestrs = Client::findOrFail($request->client_id)->reestrs;
      return view('pages.reestr.list',['reestrs' => $reestrs, 
                                       'client' => $request->client_id]);
  }

  public function add(Request $request) {
      return view('pages.reestr.form_add',['client_id'=> $request->client_id]);
  }


  public function create(Request $request) {
    $client = Client::find($request->client_id);
    $reestr = new Reestr([
                          'date_from' => $request->date_from,
                          'date_to'   => $request->date_to 
                          ]);
    $client->reestrs->save($reestr);
    return redirect(route('reestr.list',['client_id'=>$request->client_id]));


  }


}
