@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Edit Car
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('cars.update', $car->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="brand_id">Brand</label>
                <select name="brand_id" id="brand_id" class="form-control">
                    <option value="">Select Brand</option>
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}" {{ $car->brand_id == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="model_id">Model</label>
                <select name="model_id" id="model_id" class="form-control">
                    <option value="">Select Model</option>
                    @foreach($models as $model)
                        <option value="{{ $model->id }}" {{ $car->model_id == $model->id ? 'selected' : '' }}>{{ $model->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="year">Year</label>
                <input type="number" name="year" id="year" class="form-control" value="{{ $car->year }}">
            </div>
            <div class="form-group">
                <label for="mileage">Mileage</label>
                <input type="number" name="mileage" id="mileage" class="form-control" value="{{ $car->mileage }}">
            </div>
            <div class="form-group">
                <label for="color">Color</label>
                <input type="text" name="color" id="color" class="form-control" value="{{ $car->color }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Car</button>
        </form>
    </div>
</div>
@endsection
