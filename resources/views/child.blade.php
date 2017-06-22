
@extends('layouts.admin')

@section('title', 'Page Title')

@component('alert')
    @slot('title')
        Forbidden
    @endslot
    <strong>Whoops!</strong> Something went wrong!
@endcomponent

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection