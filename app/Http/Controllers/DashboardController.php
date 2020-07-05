<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserProduct;

class DashboardController extends Controller
{
    
    public function index()
    {
        $user_count    = User::count();
        $product_count = UserProduct::where('user_id', \Auth::id())->count();
        return view('admin.dashboard', compact('user_count', 'product_count'));
    }
}
