@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Models
    </div>
    <div class="card-body">
        <ul class="list-group">
            @foreach($models as $model)
                <li class="list-group-item">{{ $model->name }} (Brand: {{ $model->brand->name }})</li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
