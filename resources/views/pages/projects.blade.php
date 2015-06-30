@extends('layout.main')

@section('title', 'Project List')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop

@section('content')
    @foreach($proj_list as $proj)
        <p>Project Name : {{$proj->proj_name}}</p>
        <p>Project Description : {{$proj->proj_desc}}</p>
        <p>Project Name : {{$proj->proj_desc}}</p>
    @endforeach
@stop