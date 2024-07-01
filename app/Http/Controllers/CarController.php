<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Brand;
use App\Models\CarModel;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::where('user_id', auth()->id())->get();
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        $brands = Brand::all();
        $models = CarModel::all();
        return view('cars.create', compact('brands', 'models'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'brand_id' => 'required|exists:brands,id',
            'model_id' => 'required|exists:car_models,id',
            'year' => 'nullable|integer',
            'mileage' => 'nullable|integer',
            'color' => 'nullable|string',
        ]);

        $validated['user_id'] = auth()->id();

        Car::create($validated);

        return redirect()->route('cars.index');
    }

    public function show($id)
    {
        $car = Car::where('user_id', auth()->id())->findOrFail($id);
        return view('cars.show', compact('car'));
    }

    public function edit($id)
    {
        $car = Car::where('user_id', auth()->id())->findOrFail($id);
        $brands = Brand::all();
        $models = CarModel::all();
        return view('cars.edit', compact('car', 'brands', 'models'));
    }

    public function update(Request $request, $id)
    {
        $car = Car::where('user_id', auth()->id())->findOrFail($id);

        $validated = $request->validate([
            'brand_id' => 'required|exists:brands,id',
            'model_id' => 'required|exists:car_models,id',
            'year' => 'nullable|integer',
            'mileage' => 'nullable|integer',
            'color' => 'nullable|string',
        ]);

        $car->update($validated);

        return redirect()->route('cars.index');
    }

    public function destroy($id)
    {
        $car = Car::where('user_id', auth()->id())->findOrFail($id);
        $car->delete();
        return redirect()->route('cars.index');
    }

    public function getModelsByBrand($brand_id)
    {
        $models = CarModel::where('brand_id', $brand_id)->get();
        return response()->json($models);
    }
}

