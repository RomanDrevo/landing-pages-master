<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThankyouPageController extends Controller
{
    public function redirect(Request $request){


        if(!$request->has("url"))
            dd("Unauthorized request");

        return redirect($request->url);
    }
}
