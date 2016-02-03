@extends('app')

@section('title', 'Your Medications')

@section('navbar')

@section('content')

  <h1>Your Medications</h1>

  @foreach ($medications as $medication)
    <h4>{{ $medication->name }} - {{ $medication->mg }} taken at {{ $medication->take_at }}</h4>


  @endforeach



@stop



