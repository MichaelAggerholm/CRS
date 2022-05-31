@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Rediger vehicle model</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('vehicleModels.index') }}"> Back</a>
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

    <form action="{{ route('vehicleModels.update',$model->id) }}" method="POST">
        @csrf

        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Model:</strong>
                    <input type="text" name="model" value="{{ $model->model }}" class="form-control" placeholder="Model">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Brand:</strong>
                    <select class="form-control" name="vehicle_brand_id">
                        @if ($brands->isNotEmpty())
                            @foreach($brands as $brand)
                                <option value="{{ $brand->id }}" @selected($selected_brand == $brand->id)>{{ $brand->brand }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Rediger</button>
            </div>
        </div>
    </form>
@endsection
