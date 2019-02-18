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

    $reestr = new Reestr;
    $reestr->date_from      =  $request->date_from;
    $reestr->date_to        =  $request->date_to;
    $reestr->client_id      =  $request->client_id;   
    $reestr->save();
    return redirect(route('reestr.list',['client_id'=>$request->client_id]));


  }


}
