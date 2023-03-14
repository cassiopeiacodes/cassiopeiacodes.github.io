<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \RouterOS\Client;
use \RouterOS\Query;

class InfoController extends Controller
{
    public function show()
    {
        $client = new Client([
            'host' => '10.10.20.1',
            'user' => 'admin',
            'pass' => '',
            'port' => 8728,
        ]);
        
        $query =
            (new Query('/ip/address/print'));
        
        $response = $client->query($query)->read();

        return dd($response);
    }
}