@extends('app')

@section('content')
<table class="table table-success table-striped">
    <tr class="table-dark">
        <th>id</th>
        <th>name</th>
        <th>streat</th>
        <th>streat_number</th>
        <th>phone</th>
        <th>email</th>
        <th>id_city</th>
        <th>Actions</th>
        
    </tr>
    @foreach($station_owners as $station_owner)
    <tr>
        <td>{{ $station_owner->id }}</td>
        <td>{{ $station_owner->name }}</td>
        <td>{{ $station_owner->streat }}</td>
        <td>{{ $station_owner->streat_number }}</td>
        <td>{{ $station_owner->phone }}</td>
        <td>{{ $station_owner->email }}</td>
        <!--<td>{{ $station_owner->id_city }}</td>-->
        <td>{{ $station_owner->city->name ?? '' }}</td>
        <td>
            <a href="javascript:alert('not implement jet')" class="btn btn-outline-primary">Edit</a>
            <a class="btn btn-outline-danger" href="{{ route('station_owners.destroy', ['station_owner'=> $station_owner->id]) }}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection