@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Administrators - index page</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('administrators.create') }}"> Opret ny administrator</a>
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
            <th>First_name</th>
            <th>Last_name</th>
            <th>Phone</th>
            <th>Email</th>
        </tr>
        @foreach ($administrators as $administrator)
            <tr>
                <td>{{ $administrator->first_name }}</td>
                <td>{{ $administrator->last_name }}</td>
                <td>{{ $administrator->phone }}</td>
                <td>{{ $administrator->email }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('administrators.show',$administrator->id) }}">Vis</a>
                    <a class="btn btn-primary" href="{{ route('administrators.edit',$administrator->id) }}">Rediger</a>
                    <form action="{{ route('administrators.destroy',$administrator->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Slet</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
