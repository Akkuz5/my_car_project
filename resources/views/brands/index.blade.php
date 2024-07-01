@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Brands
    </div>
    <div class="card-body">
        <ul class="list-group">
            @foreach($brands as $brand)
                <li class="list-group-item">{{ $brand->name }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endsection