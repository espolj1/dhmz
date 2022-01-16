@extends('app')

@section('content')
<table class="table table-success table-striped">
    <tr class="table-dark">
        <th>id</th>
        <th>name</th>
        <th>measuring_range</th>
        <th>measuring_element</th>
        <th>Actions</th>
    </tr>
    @foreach($sensors_types as $sensor_type)
    <tr>
        <td>{{ $sensor_type->id }}</td>
        <td>{{ $sensor_type->name }}</td>
        <td>{{ $sensor_type->measuring_range }}</td>
        <td>{{ $sensor_type->measuring_element }}</td>
        <td>
            <a href="javascript:alert('not implement jet')" class="btn btn-outline-primary">Edit</a>
            <a class="btn btn-outline-danger" href="{{ route('sensors_types.destroy', ['sensor_type'=> $sensor_type->id]) }}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection