@extends('app')

@section('title', 'Your Medications')

@section('navbar')

@section('content')

  <h1>Your Medications</h1>

  @foreach ($medications as $medication)
    {{ $medication->name }} - {{ $medication->mg }} taken at {{ $medication->take_at }} <a href="/medications/{{ $medication-> id }}"> View </a>


  @endforeach



@stop



