@extends('app')

@section('title', 'Your Medications')

@section('navbar')

@section('content')

  <h1>Your Medications</h1>

  @foreach ($medications as $medication)
  <p>
    {{ $medication->name }} - {{ $medication->mg }} MG taken at {{ DateTime::createFromFormat('Y-m-d H:i:s', $medication->take_at)->format('g:i a') }} <a href="/medications/{{ $medication-> id }}"> View </a>
  </p>

  @endforeach



@stop



