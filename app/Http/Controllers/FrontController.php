<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;

class FrontController extends Controller
{
    
    public function index()
    {
        return view('index');
    }

}
