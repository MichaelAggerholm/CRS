@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Vehicle types - index page</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('vehicleTypes.create') }}"> Opret ny vehicle type</a>
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
            <th>Brand</th>
        </tr>
        @foreach ($vehicleTypes as $vehicleType)
            <tr>
                <td>{{ $vehicleType->type }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('vehicleTypes.show',$vehicleType->id) }}">Vis</a>
                    <a class="btn btn-primary" href="{{ route('vehicleTypes.edit',$vehicleType->id) }}">Rediger</a>
                    <form action="{{ route('vehicleTypes.destroy',$vehicleType->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Slet</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
