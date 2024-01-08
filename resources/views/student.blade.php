@extends('layouts.mainlayout')
@section('title', 'Home')

@section('content')
    <h1>Ini Halaman Home</h1>
    <h3>Student List</h3>
    <ol>
        @foreach ($studentList as $data)
        <li>
            {{$data->name}} | {{$data->gender}} | {{$data->nis}}
        </li>   
        @endforeach
    </ol>
@endsection

