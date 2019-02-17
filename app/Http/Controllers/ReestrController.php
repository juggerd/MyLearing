<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Reestr;
class ReestrController extends Controller
{
  public function list(Request $request) {
      $reestrs = Client::findOrFail($request->client_id)->reestrs;
      return view('pages.reestr.list',['reestrs' => $reestrs]);
  }

  public function add(Request $request) {
      return view('pages.reestr.form_add');
  }


  public function create(Request $request) {

    $reestr= new Reestr;
    $reestr->date_from      =  $request->date_from;
    $reestr->date_to        =  $request->date_to;
    $reestr->client_id      =  1 ;
    $reestr->save();
    return redirect(route('reestr.list'));


  }


}
