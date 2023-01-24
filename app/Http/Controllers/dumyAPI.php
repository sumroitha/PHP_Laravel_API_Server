<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dumyAPI extends Controller
{
    //
    function getData(){
        return ["name"=>"roitha","email"=>"sumroitha@gamil.com","address"=>"Phnom Penh"];
    }
}
