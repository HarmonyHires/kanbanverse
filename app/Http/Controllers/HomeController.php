<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $plans = Plan::with('features')->get();
        return view('home', compact('plans'));
    }

    public function dashboard() {
        return view('backsite.dashboard');
    }
}
