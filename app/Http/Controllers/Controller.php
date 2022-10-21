<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function getData(Request $request)
    {

        return response()->json(['data' => 'Mantap Success acces e'], 200);
    }
}
