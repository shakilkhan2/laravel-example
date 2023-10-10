<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    function Home() {
        return view('welcome');
       }
   
    function One() {
    return view('firstView');
   }

   function Two() {
    return view('secondView');
   }
}
