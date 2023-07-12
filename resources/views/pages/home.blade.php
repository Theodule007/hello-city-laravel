@extends('app')

@section('title','Hello city')

@section('content')
        <h1>Hello from Haiti</h1>
        <p> It's currently {{ date('H:i A') }}.</p>

@endsection

