@extends('app')

@section('title', '{{ $medication->name }}')

@section('navbar')

@section('content')

  <h1>{{ $medication->name }}</h1>

   {{ $medication->mg }} MG taken at {{ DateTime::createFromFormat('Y-m-d H:i:s', $medication->take_at)->format('g:i a') }}





@stop



