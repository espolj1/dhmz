@extends('app')

@section('content')
<table class="table table-success table-striped">
    <tr class="table-dark">
        <th>id</th>
        <th>name</th>
        <th>post_number</th>
        <th>Actions</th>
    </tr>
    @foreach($cities as $city)
    <tr>
        <td>{{ $city->id }}</td>
        <td>{{ $city->name }}</td>
        <td>{{ $city->post_number }}</td>
        <td>
            <a href="javascript:alert('not implement jet')" class="btn btn-outline-primary">Edit</a>
            <a class="btn btn-outline-danger" href="{{ route('cities.destroy', ['city'=> $city->id]) }}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection