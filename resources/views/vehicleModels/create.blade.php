@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tilføj ny vehicle model</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('vehicleModels.index') }}"> Tilbage</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('vehicleModels.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Model:</strong>
                    <input type="text" name="model" class="form-control" placeholder="Model">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Brand:</strong>
                    <select class="form-control" name="vehicle_brand_id">
                        @if ($vehicle_brands->count())
                            @foreach($vehicle_brands as $vehicle_brand)
                                <option value="{{ $vehicle_brand->id }}" {{ $selected_vehicle_brand == $vehicle_brand->id ? 'selected="selected"' : '' }}>
                                    {{ $vehicle_brand->brand }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Opret</button>
            </div>
        </div>
    </form>
@endsection
