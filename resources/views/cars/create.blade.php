@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Add Car
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
        <form action="{{ route('cars.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="brand_id">Brand</label>
                <select name="brand_id" id="brand_id" class="form-control">
                    <option value="">Select Brand</option>
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="model_id">Model</label>
                <select name="model_id" id="model_id" class="form-control">
                    <option value="">Select Model</option>
                </select>
            </div>
            <div class="form-group">
                <label for="year">Year</label>
                <input type="number" name="year" id="year" class="form-control">
            </div>
            <div class="form-group">
                <label for="mileage">Mileage</label>
                <input type="number" name="mileage" id="mileage" class="form-control">
            </div>
            <div class="form-group">
                <label for="color">Color</label>
                <input type="text" name="color" id="color" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Add Car</button>
        </form>
    </div>
</div>

<script>
    document.getElementById('brand_id').addEventListener('change', function () {
        var brandId = this.value;
        var modelSelect = document.getElementById('model_id');

        modelSelect.innerHTML = '<option value="">Select Model</option>';

        if (brandId) {
            fetch(`/models/${brandId}`)
                .then(response => response.json())
                .then(models => {
                    models.forEach(model => {
                        var option = document.createElement('option');
                        option.value = model.id;
                        option.textContent = model.name;
                        modelSelect.appendChild(option);
                    });
                });
        }
    });
</script>
@endsection
