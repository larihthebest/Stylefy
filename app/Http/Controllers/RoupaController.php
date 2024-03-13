<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoupaController extends Controller
{
    public function index(){
        return view ('index');
    }

    public function produtos(){
        return view('produtos');
    }

    public function roupas_femininas(){
        return view('roupas_femininas');
    }

    public function roupas_masculinas(){
        return view('roupas_masculinas');
    }

    
}
