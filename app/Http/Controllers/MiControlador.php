<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiControlador extends Controller
{
    public function index(){

      return view('index');
}

    public function registro(){
      return view('registro');
}

    public function login(){
      return view('login');
}

    public function faq(){
      return view('faq');
}
}
