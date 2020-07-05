<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserProduct;

class CalendarController extends Controller
{
    
    public function index()
    {
        $user_products = UserProduct::where('user_id', \Auth::id())->get();

        return view('admin.calendar.index', compact('user_products'));
    }
}
