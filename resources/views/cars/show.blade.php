@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Car Details
        <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-primary btn-sm float-right">Edit</a>
    </div>
    <div class="card-body">
        <p><strong>Brand:</strong> {{ $car->brand->name }}</p>
        <p><strong>Model:</strong> {{ $car->model->name }}</p>
        <p><strong>Year:</strong> {{ $car->year }}</p>
        <p><strong>Mileage:</strong> {{ $car->mileage }}</p>
        <p><strong>Color:</strong> {{ $car->color }}</p>
    </div>
</div>
@endsection
