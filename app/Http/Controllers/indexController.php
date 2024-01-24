<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class IndexController extends Controller
{
    public function main()
    {
        $items = config('items'); 
               return view('main');
    }
}