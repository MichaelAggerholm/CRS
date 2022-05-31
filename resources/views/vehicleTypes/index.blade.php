@extends('layouts.app')

@section('content')

    <x-headerWithSearch title="Alle Typer" name="searchVehicleTypes" link="vehicleTypes.create" />

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-sm mt-2">
        <thead>
        <tr>
            <th scope="col" style="width: 10%">@sortablelink('id', 'ID')</th>
            <th scope="col" style="width: 70%">@sortablelink('type', 'Type')</th>
            <th scope="col" style="width: 20%"></th>
        </tr>
        </thead>
        <tbody>
        @if($vehicleTypes->count() == 0)
            <tr>
                <td colspan="5">Der er ingen typer at vise..</td>
            </tr>
        @endif

        @foreach ($vehicleTypes as $vehicleType)
            <tr>
                <th scope="row">{{Str::limit($vehicleType->id, 3, $end='..')}}</th>
                <td>{{Str::limit($vehicleType->type, 20, $end='..')}}</td>
                <td>
                    <form action="{{ route('vehicleTypes.destroy',$vehicleType->id) }}" method="POST">
                        <a class="btn btn-info btn-sm" href="{{ route('vehicleTypes.show',$vehicleType->id) }}">Detaljer</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('vehicleTypes.edit',$vehicleType->id) }}">Rediger</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm">Slet</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{$vehicleTypes->links("pagination::bootstrap-4")}}

@endsection
