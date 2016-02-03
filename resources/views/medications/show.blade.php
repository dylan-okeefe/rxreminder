@extends('app')

@section('title', '{{ $medication->name }}')

@section('navbar')

@section('content')

  <h1>{{ $medication->name }}</h1>
  
  @if ({{ $medication->take_at }} < 12:00)

   {{ $medication->mg }} taken at {{ $medication->take_at }} AM

  @elseif ({{ $medication->take_at >= 12:00 }})

    {{ $medication->mg }} taken at {{ $medication->take_at }} PM

  @endif



@stop



