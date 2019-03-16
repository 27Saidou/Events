@extends('layouts.app')
@section('content')
    <h1>Editer un événements#{{$event->iid}}</h1>

    <form action="{{route('events.update',$event)}}" method="post">
        {{ csrf_field()}}
        {{method_field('PUT')}}
        @include('events._form',['submitButtonText'=>"Modifier un evenement"])
    </form>
    <p><a href="{{route('home')}}">Annuler</a></p>
@stop
