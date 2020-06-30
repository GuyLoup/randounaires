<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WelcomeController extends Controller
{
    //
    public function index(){


        $test = DB::table('utilisateurs')
            ->get();


        return view('welcome' , compact('test'));



    }




}
