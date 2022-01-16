@extends('app')

@section('content')
<table class="table table-success table-striped">
    <tr class="table-dark">
        <th>id</th>
        <th>name</th>
        <th>Actions</th>
    </tr>
    @foreach($station_categories as $station_category)
    <tr>
        <td>{{ $station_category->id }}</td>
        <td>{{ $station_category->name }}</td>
        <td>
            <a href="javascript:alert('not implement jet')" class="btn btn-outline-primary">Edit</a>
            <a class="btn btn-outline-danger" href="{{ route('station_categories.destroy', ['station_category'=> $station_category->id]) }}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection