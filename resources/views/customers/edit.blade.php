@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Rediger Customer</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('customers.index') }}"> Back</a>
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

    <form action="{{ route('customers.update',$customer->id) }}" method="POST">
        @csrf

        @method('PUT')
        <div class="row">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>First_name:</strong>
                        <input type="text" name="first_name" value="{{ $customer->first_name }}" class="form-control" placeholder="First_name">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Last_name:</strong>
                        <input type="text" name="last_name" value="{{ $customer->last_name }}" class="form-control" placeholder="Last_name">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Birth_date:</strong>
                        <input type="date" name="birth_date" value="{{ $customer->birth_date }}" class="form-control" placeholder="Birth_date">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Phone:</strong>
                        <input type="number" name="phone" value="{{ $customer->phone }}" class="form-control" placeholder="Phone">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        <input type="email" name="email" value="{{ $customer->email }}" class="form-control" placeholder="Email">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Address:</strong>
                        <input type="text" name="address" value="{{ $customer->address }}" class="form-control" placeholder="Address">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>City:</strong>
                        <input type="text" name="city" value="{{ $customer->city }}" class="form-control" placeholder="City">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Postal_code:</strong>
                        <input type="number" name="postal_code" value="{{ $customer->postal_code }}" class="form-control" placeholder="Postal_code">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Credit_card_number:</strong>
                        <input type="number" name="credit_card_number" value="{{ $customer->credit_card_number }}" class="form-control" placeholder="Credit_card_number">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Driver_license_number:</strong>
                        <input type="text" name="driver_license_number" value="{{ $customer->driver_license_number }}" class="form-control" placeholder="Driver_license_number">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Password:</strong>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Rediger</button>
            </div>
        </div>
    </form>
@endsection
