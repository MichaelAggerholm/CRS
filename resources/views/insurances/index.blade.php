@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Insurance - index page</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('insurances.create') }}"> Opret ny insurance</a>
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
            <th>name</th>
            <th>description</th>
            <th>coverage_type</th>
            <th>daily_price</th>
        </tr>
        @foreach ($insurances as $insurance)
            <tr>
                <td>{{ $insurance->name }}</td>
                <td>{{ $insurance->description }}</td>
                <td>{{ $insurance->coverage_type }}</td>
                <td>{{ $insurance->daily_price }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('insurances.show',$insurance->id) }}">Vis</a>
                    <a class="btn btn-primary" href="{{ route('insurances.edit',$insurance->id) }}">Rediger</a>
                    <form action="{{ route('insurances.destroy',$insurance->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Slet</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
