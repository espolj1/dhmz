@extends('app')

@section('content')
<table class="table table-success table-striped">
    <tr class="table-dark">
        <th>id</th>
        <th>date</th>
        <th>id_sensors</th>
        <th>id_met_station</th>
        <th>Actions</th>
    </tr>
    @foreach($installed as $install)
    <tr>
        <td>{{ $install->id }}</td>
        <td>{{ $install->date }}</td>
        <td>{{ $install->id_sensors }}</td>
        <td>{{ $install->id_met_station }}</td>
        <td>
            <a href="javascript:alert('not implement jet')" class="btn btn-outline-primary">Edit</a>
            <a class="btn btn-outline-danger" href="{{ route('installed.destroy', ['install'=> $install->id]) }}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection