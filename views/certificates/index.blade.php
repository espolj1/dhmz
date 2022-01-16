@extends('app')

@section('content')
<table class="table table-success table-striped">
    <tr class="table-dark">
        <th>id</th>
        <th>number</th>
        <th>date</th>
        <th>id_sensor</th>
        <th>Actions</th>
    </tr>
    @foreach($certificates as $certificat)
    <tr>
        <td>{{ $certificat->id }}</td>
        <td>{{ $certificat->number }}</td>
        <td>{{ $certificat->date }}</td>
        <!--<td>{{ $certificat->id_sensor }}</td>-->
        <td>{{ $certificat->sensor->serial_number}}</td>
        <td>
            <a href="javascript:alert('not implement jet')" class="btn btn-outline-primary">Edit</a>
            <a class="btn btn-outline-danger" href="{{ route('certificates.destroy', ['certificat'=> $certificat->id]) }}">Delete</a>
        </td>
        
    </tr>
    @endforeach
</table>
@endsection