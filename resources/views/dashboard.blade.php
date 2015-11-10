@extends('template')
@section('content')
  
	<!-- Main component for a primary marketing message or call to action -->
	<div class="jumbotron">
        <h1>Welcome to AVCS</h1>
        <p>Have you been here before?</p>
        <p>
          <a class="btn btn-lg btn-danger" href="{{ 'guest/create' }}" role="button">No, not yet</a>
          <a class="btn btn-lg btn-success" href="{{ 'guest' }}" role="button">Yes, I did</a>
        </p>
      </div>

@stop