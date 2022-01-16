@extends('app')

@section('content')
<table class="table table-success table-striped">
    <tr class="table-dark">
        <th>id</th>
        <th>name</th>
        <th>ip_adress</th>
        <th>sim_card</th>
        <th>manufacturer</th>
        <th>image</th>
        <th>id_type</th>
        <th>id_category</th>
        <th>id_city</th>
        <th>id_station_owner</th>
        <th>Actions</th>
    </tr>
    @foreach($meteorological_stations as $meteorological_station)
    <tr>
        <td>{{ $meteorological_station->id }}</td>
        <td>{{ $meteorological_station->name }}</td>
        <td>{{ $meteorological_station->ip_adress }}</td>
        <td>{{ $meteorological_station->sim_card }}</td>
        <td>{{ $meteorological_station->manufacturer }}</td>
        <td>{{ $meteorological_station->image }}</td>
        <!--<td>{{ $meteorological_station->id_type }}</td>
        <td>{{ $meteorological_station->id_category }}</td>
        <td>{{ $meteorological_station->id_city }}</td>
        <td>{{ $meteorological_station->id_station_owner }}</td>-->
        <td>{{ $meteorological_station->station_type->name ?? '' }}</td>
        <td>{{ $meteorological_station->station_category->name ?? ''}}</td>
        <td>{{ $meteorological_station->city->name }}</td>
        <td>{{ $meteorological_station->station_owner->name }}</td>
        <td>
            <a href="javascript:alert('not implement jet')" class="btn btn-outline-primary">Edit</a>
            <a class="btn btn-outline-danger" href="{{ route('meteorological_stations.destroy', ['meteorological_station'=> $meteorological_station->id]) }}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection