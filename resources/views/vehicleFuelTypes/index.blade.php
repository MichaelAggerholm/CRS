@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Vehicle fuel types - index page</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('vehicleFuelTypes.create') }}"> Opret ny vehicle fuel type</a>
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
        @foreach ($vehicleFuelTypes as $vehicleFuelType)
            <tr>
                <td>{{ $vehicleFuelType->fuel }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('vehicleFuelTypes.show',$vehicleFuelType->id) }}">Vis</a>
                    <a class="btn btn-primary" href="{{ route('vehicleFuelTypes.edit',$vehicleFuelType->id) }}">Rediger</a>
                    <form action="{{ route('vehicleFuelTypes.destroy',$vehicleFuelType->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Slet</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
