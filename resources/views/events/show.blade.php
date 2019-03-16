@extends('layouts.app')
@section('content')
<h1>{{$event->title}}</h1>

<p>{{$event->description}}</p>
<a href="{{route('events.edit',$event)}}" class="btn btn-success">Edit</a>
<form action="{{route('events.destroy',$event)}}" method="post" class="inline-block" onsubmit="return confirm('Etes-Vous sur!')">
    {{csrf_field() }}
    {{method_field('DELETE')}}
    <input type="submit" value="Supprimer" class="btn btn-danger">
</form>
<hr>
<p><a href="{{route('home')}}">Tous les événements</a></p>
@stop
