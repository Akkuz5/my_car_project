<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class HomeController extends Controller
{
    public function index()
    {
        $cars = Car::where('user_id', auth()->id())->get();
        return view('home', compact('cars'));
    }
}
