@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Rediger vehicle fuel type</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('vehicleFuelTypes.index') }}"> Back</a>
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

    <form action="{{ route('vehicleFuelTypes.update',$vehicleFuelType->id) }}" method="POST">
        @csrf

        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>fuel:</strong>
                    <input type="text" name="fuel" value="{{ $vehicleFuelType->fuel }}" class="form-control" placeholder="fuel">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Rediger</button>
            </div>
        </div>
    </form>
@endsection
