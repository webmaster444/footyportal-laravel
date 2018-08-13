@extends('layouts.app')

@section('title', 'Child Page')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    
@endsection