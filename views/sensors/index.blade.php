@extends('app')

@section('content')
<table class="table table-success table-striped">
    <tr class="table-dark">
        <th>id</th>
        <th>serial_number</th>
        <th>name</th>
        <th>manufacturer</th>
        <th>id_sensor_type</th>
        <th>Actions</th>
    </tr>
    @foreach($sensors as $sensor)
    <tr>
        <td>{{ $sensor->id }}</td>
        <td>{{ $sensor->serial_number }}</td>
        <td>{{ $sensor->name }}</td>
        <td>{{ $sensor->manufacturer }}</td>
        <!--<td>{{ $sensor->id_sensor_type }}</td>-->
        <td>{{ $sensor->sensor_type->name }}</td>
        <td>
            <a href="javascript:alert('not implement jet')" class="btn btn-outline-primary">Edit</a>
            <a class="btn btn-outline-danger" href="{{ route('sensors.destroy', ['sensor'=> $sensor->id]) }}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection