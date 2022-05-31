@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Vehicles - index page</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('vehicles.create') }}"> Opret ny vehicle</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>vehicle_type_id</th>
            <th>vehicle_brand_id</th>
            <th>vehicle_model_id</th>
            <th>vehicle_fuel_type_id</th>
            <th>engine_size</th>
            <th>color</th>
            <th>mileage</th>
            <th>power</th>
            <th>images</th>
            <th>production_year</th>
            <th>daily_price</th>
            <th>chassis_number</th>
            <th>plate_number</th>
        </tr>
        @foreach ($vehicles as $vehicle)
            <tr>
                <td>{{ $vehicle->id }}</td>
                <td>{{ $vehicle->vehicle_type_id }}</td>
                <td>{{ $vehicle->vehicle_brand_id }}</td>
                <td>{{ $vehicle->vehicle_model_id }}</td>
                <td>{{ $vehicle->vehicle_fuel_type_id }}</td>
                <td>{{ $vehicle->engine_size }}</td>
                <td>{{ $vehicle->color }}</td>
                <td>{{ $vehicle->mileage }}</td>
                <td>{{ $vehicle->power }}</td>
                <td>{{ $vehicle->images }}</td>
                <td>{{ $vehicle->production_year }}</td>
                <td>{{ $vehicle->daily_price }}</td>
                <td>{{ $vehicle->chassis_number }}</td>
                <td>{{ $vehicle->plate_number }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('vehicles.show',$vehicle->id) }}">Vis</a>
                    <a class="btn btn-primary" href="{{ route('vehicles.edit',$vehicle->id) }}">Rediger</a>
                    <form action="{{ route('vehicles.destroy',$vehicle->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Slet</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
