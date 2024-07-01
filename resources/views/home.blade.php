@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        My Cars
    </div>
    <div class="card-body">
        <a href="{{ route('cars.create') }}" class="btn btn-primary mb-3">Add Car</a>
        <ul class="list-group">
            @foreach($cars as $car)
                <li class="list-group-item">
                    {{ $car->model->name }} (Brand: {{ $car->brand->name }})
                    <a href="{{ route('cars.show', $car->id) }}" class="btn btn-info btn-sm float-right">View</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
