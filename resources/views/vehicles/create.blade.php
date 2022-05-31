@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tilføj ny vehicle</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('vehicles.index') }}"> Tilbage</a>
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

    <form action="{{ route('vehicles.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>vehicle_type_id:</strong>
                    <input type="number" name="vehicle_type_id" class="form-control" placeholder="vehicle_type_id">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>vehicle_brand_id:</strong>
                    <input type="number" name="vehicle_brand_id" class="form-control" placeholder="vehicle_brand_id">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>vehicle_model_id:</strong>
                    <input type="number" name="vehicle_model_id" class="form-control" placeholder="vehicle_model_id">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>vehicle_fuel_type_id:</strong>
                    <input type="number" name="vehicle_fuel_type_id" class="form-control" placeholder="vehicle_fuel_type_id">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>engine_size:</strong>
                    <input type="text" name="engine_size" class="form-control" placeholder="engine_size">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>color:</strong>
                    <input type="text" name="color" class="form-control" placeholder="color">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>mileage:</strong>
                    <input type="number" name="mileage" class="form-control" placeholder="mileage">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>power:</strong>
                    <input type="number" name="power" class="form-control" placeholder="power">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>images:</strong>
                    <input type="text" name="images" class="form-control" placeholder="images">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>production_year:</strong>
                    <input type="number" name="production_year" class="form-control" placeholder="production_year">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>daily_price:</strong>
                    <input type="number" name="daily_price" class="form-control" placeholder="daily_price">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>chassis_number:</strong>
                    <input type="text" name="chassis_number" class="form-control" placeholder="chassis_number">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>plate_number:</strong>
                    <input type="text" name="plate_number" class="form-control" placeholder="plate_number">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Opret</button>
            </div>
        </div>
    </form>
@endsection
