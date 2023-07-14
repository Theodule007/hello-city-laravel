@extends('layouts.app')

@section('title',config('app.name','Hello City'))

@section('content')
        
        <img src="{{ asset('images/haiti-logo.jfif') }}" alt="haiti flag" class="mt-12 rounded shadow-md h-32">
        <h1 class="text-5xl font-semibold text-indigo-600 mt-8">Hello from Haiti</h1>
        <p class="text-lg text-gray-800"> It's currently {{ date('H:i A') }}.</p>

@endsection

