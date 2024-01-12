@extends('layouts.mainlayout')
@section('title', 'Extracurricular')

@section('content')
    <h1>Ini Halaman Extracurricular</h1>
    <h3>Extracurricular List</h3>   

    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Anggota</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($eskulList as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->name}}</td>
                <td>
                    @foreach ($data->students as $item)
                        - {{$item->name}}<br>
                    @endforeach
                </td>
            </tr>   
            @endforeach
        </tbody>
    </table>
@endsection