@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Vehicle brands - index page</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('vehicleBrands.create') }}"> Opret ny vehicle brand</a>
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
        @foreach ($vehicleBrands as $vehicleBrand)
            <tr>
                <td>{{ $vehicleBrand->brand }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('vehicleBrands.show',$vehicleBrand->id) }}">Vis</a>
                    <a class="btn btn-primary" href="{{ route('vehicleBrands.edit',$vehicleBrand->id) }}">Rediger</a>
                    <form action="{{ route('vehicleBrands.destroy',$vehicleBrand->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Slet</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
