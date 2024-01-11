@extends('layouts.mainlayout')
@section('title', 'Home')

@section('content')
    <h1>Ini Halaman Student</h1>
    <h3>Student List</h3>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Gender</th>
                <th>NIS</th>
                <th>Class</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($studentList as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->gender}}</td>
                <td>{{$data->nis}}</td>
                <td>{{$data->class['name']}}</td>
            </tr>   
            @endforeach
        </tbody>
    </table>
    {{-- <ol>
        @foreach ($studentList as $data)
        <li>
            {{$data->name}} | {{$data->gender}} | {{$data->nis}}
        </li>   
        @endforeach
    </ol> --}}
@endsection

