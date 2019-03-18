<?php

namespace App\Http\Controllers;

use App\Models\Client;

class AjaxController extends Controller
{
    public function clients()
    {
        $clients = Client::all();

        return json_encode([
            'success' => true,
            'data'    => $clients,
        ], JSON_UNESCAPED_UNICODE);
    }
}
