@extends('app')

@section('title', '{{ $medication->name }}')

@section('navbar')

@section('content')

  <h1>{{ $medication->name }}</h1>

   {{ $medication->mg }} taken at {{ $medication->take_at }} 



@stop



