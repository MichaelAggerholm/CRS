@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Rental - index page</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('rentals.create') }}"> Opret ny rental</a>
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
            <th>customer_id</th>
            <th>employee_id</th>
            <th>vehicle_id</th>
            <th>total_rental_price</th>
            <th>rental_begin</th>
            <th>rental_end</th>
        </tr>
        @foreach ($rentals as $rental)
            <tr>
                <td>{{ $rental->customer_id }}</td>
                <td>{{ $rental->employee_id }}</td>
                <td>{{ $rental->vehicle_id }}</td>
                <td>{{ $rental->total_rental_price }}</td>
                <td>{{ $rental->rental_begin }}</td>
                <td>{{ $rental->rental_end }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('rentals.show',$rental->id) }}">Vis</a>
                    <a class="btn btn-primary" href="{{ route('rentals.edit',$rental->id) }}">Rediger</a>
                    <form action="{{ route('rentals.destroy',$rental->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Slet</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
