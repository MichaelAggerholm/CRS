@extends('layouts.app')

@section('content')

    <x-headerWithSearch title="Alle Modeller" name="searchVehicleModels" link="vehicleModels.create" />

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-sm mt-2">
        <thead>
        <tr>
            <th scope="col" style="width: 10%">@sortablelink('id', 'ID')</th>
            <th scope="col" style="width: 35%">@sortablelink('model', 'Model')</th>
            <th scope="col" style="width: 35%">@sortablelink('vehicle_brand_id', 'Brand')</th>
            <th scope="col" style="width: 20%"></th>
        </tr>
        </thead>
        <tbody>
        @if($vehicleModels->count() == 0)
            <tr>
                <td colspan="5">Der er ingen modeller at vise..</td>
            </tr>
        @endif

        @foreach ($vehicleModels as $vehicleModel)
            <tr>
                <th scope="row">{{Str::limit($vehicleModel->id, 3, $end='..')}}</th>
                <td>{{Str::limit($vehicleModel->model, 20, $end='..')}}</td>
                <td>{{Str::limit($vehicleModel->vehicle_brand->brand, 20, $end='..')}}</td>
                <td>
                    <form action="{{ route('vehicleModels.destroy',$vehicleModel->id) }}" method="POST">
                        <a class="btn btn-info btn-sm" href="{{ route('vehicleModels.show',$vehicleModel->id) }}">Detaljer</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('vehicleModels.edit',$vehicleModel->id) }}">Rediger</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm">Slet</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{$vehicleModels->links("pagination::bootstrap-4")}}

@endsection
