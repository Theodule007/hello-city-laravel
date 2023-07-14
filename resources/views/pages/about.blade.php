@extends('layouts.app')

    @section('title','About Us | '. config('app.name','Hello City'))
    <img src="{{asset('images/ohh.png')}}" alt="gopher" class="mt-5 rounded-full shadow-md">

    @section('content')  
        <h2 class="text-gray-700"> Build with &hearts; by Theodule Saintil.</h2>
        <p class="mt-5"> 
            <a href={{route('home')}} class="text-indigo-500 hover:text-indigo-600 underline">return to homepage</a> 
        </p>

    @endsection

