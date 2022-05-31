@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Vehicle models - index page</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('vehicleModels.create') }}"> Opret ny vehicle model</a>
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
            <th>Model</th>
            <th>vehicle_brand_id</th>
        </tr>
        @foreach ($vehicleModels as $vehicleModel)
            <tr>
                <td>{{ $vehicleModel->model }}</td>
                <td>{{ $vehicleModel->vehicle_brand->brand }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('vehicleModels.show',$vehicleModel->id) }}">Vis</a>
                    <a class="btn btn-primary" href="{{ route('vehicleModels.edit',$vehicleModel->id) }}">Rediger</a>
                    <form action="{{ route('vehicleModels.destroy',$vehicleModel->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Slet</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
