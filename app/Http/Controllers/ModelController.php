<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function index()
    {
        $models = CarModel::all();
        return view('models.index', compact('models'));
    }
}
