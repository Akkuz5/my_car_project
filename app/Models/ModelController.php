<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarModel;

class ModelController extends Controller
{
    public function index()
    {
        $models = CarModel::all();
        return view('models.index', compact('models'));
    }
}
