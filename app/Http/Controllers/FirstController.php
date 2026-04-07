<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    //ini diisi sama function2
    public function sum() {
    $a = 10;
    $b = 20;
    $c = $a + $b;
    return "jumlah $a + $b = $c";  
    }
}
