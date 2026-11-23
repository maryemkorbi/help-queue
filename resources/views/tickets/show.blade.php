@extends('layouts.app')

@section('title', $ticket->name)

@section('content')
    <p><a href="/tickets">Back to the queue</a></p>

    <article class="ticket">
        <h1>{{ $ticket->name }} <span class="topic">{{ $ticket->topic }}</span></h1>
        <p>{{ $ticket->description }}</p>
        <p>{{ $ticket->created_at->diffForHumans() }}</p>
    </article>
@endsection
