@extends('app')

@section('content')
<table class="table table-success table-striped">
    <tr class="table-dark">
        <th>id</th>
        <th>name</th>
        <th>Actions</th>
    </tr>
    @foreach($station_types as $station_type)
    <tr>
        <td>{{ $station_type->id }}</td>
        <td>{{ $station_type->name }}</td>
        <td>
            <a href="javascript:alert('not implement jet')" class="btn btn-outline-primary">Edit</a>
            <a class="btn btn-outline-danger" href="{{ route('station_types.destroy', ['station_type'=> $station_type->id]) }}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection