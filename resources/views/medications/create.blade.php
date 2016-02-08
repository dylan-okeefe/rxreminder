@extends('app')

@section('title', 'Add Medication')

@section('navbar')

@section('content')

  <h1>Add a Medication</h1>

  <hr/>

  {!! Form::open(['url' => 'medications']) !!}
    <div class="form-group">
      {!! Form::label('name', 'Medication Name:' ) !!}
      {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('mg', 'MG:' ) !!}
      {!! Form::text('mg', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('take_at', 'Take At:' ) !!}
      {!! Form::input('time', 'take_at', null, ['class' => 'form-control']) !!}
    </div>

    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

    <div class="form-group">
      {!! Form::submit('Add Medication', ['class' => 'btn btn-primary form-control']) !!}
    </div>


  {!! Form::close() !!}


  @if ($errors->any())
    <ul class="alert alert-danger">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif



@stop