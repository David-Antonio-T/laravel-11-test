<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    function index()
    {
        $data=['name'=>'Alejandro'];
        return view('contact1',$data);
    }
    function index2()
    {
        $data=['name'=>'Pedro'];
        return view('contact1',$data);
    }
    function index3()
    {
        $data=['name'=>'Juan'];
        return view('contact1',$data);
    }
}
