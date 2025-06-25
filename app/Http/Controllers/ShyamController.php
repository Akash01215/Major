<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShyamController extends Controller
{
     public function aka()
    {
        $users= user ::all();
        dd($users);
    }
}
