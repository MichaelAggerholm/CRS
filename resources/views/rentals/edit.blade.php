@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Rediger rental</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('rentals.index') }}"> Back</a>
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

    <form action="{{ route('rentals.update',$rental->id) }}" method="POST">
        @csrf

        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>customer_id:</strong>
                    <input type="number" name="customer_id" value="{{ $rental->customer_id }}" class="form-control" placeholder="customer_id">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>employee_id:</strong>
                    <input type="number" name="employee_id" value="{{ $rental->employee_id }}" class="form-control" placeholder="employee_id">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>vehicle_id:</strong>
                    <input type="number" name="vehicle_id" value="{{ $rental->vehicle_id }}" class="form-control" placeholder="vehicle_id">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>total_rental_price:</strong>
                    <input type="number" name="total_rental_price" value="{{ $rental->total_rental_price }}" class="form-control" placeholder="total_rental_price">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>rental_begin:</strong>
                    <input type="date" name="rental_begin" value="{{ $rental->rental_begin }}" class="form-control" placeholder="rental_begin">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>rental_end:</strong>
                    <input type="date" name="rental_end" value="{{ $rental->rental_end }}" class="form-control" placeholder="rental_end">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Rediger</button>
            </div>
        </div>
    </form>
@endsection
