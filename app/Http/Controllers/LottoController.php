<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lottocontroller extends Controller
{
    function lotto(){
        $lucky_number = rand(1, 49);
        $numbers = array();
        for ($i=0; $i<6; $i++) {
            $numbers[] = rand(1, 49);
        }
        return view('lotto', compact('lucky_number', 'numbers'));
    }
    


}
