@extends('layouts.mainlayout')
@section('title', 'Teachers')

@section('content')
    <h1>Ini Halaman Teacher</h1>
    <h3>Teacher List</h3>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teacherList as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection