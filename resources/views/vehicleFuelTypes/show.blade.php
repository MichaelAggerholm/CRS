@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Vis vehicle fuel type</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('vehicleFuelTypes.index') }}"> Tilbage</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Brand:</strong>
                {{ $vehicleFuelType->fuel }}
            </div>
        </div>
    </div>
@endsection
