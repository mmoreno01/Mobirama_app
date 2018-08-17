@extends('layout')

@section('content')

     <h1>hola mundo</h1> 
        <ul> 
            @foreach($users as $user) 
                <li> {{$user->servicio}}</li> 
            @endforeach 
        </ul> 
    <!-- <button class="btn btn-danger">Ver más</button> -->
    @stop

