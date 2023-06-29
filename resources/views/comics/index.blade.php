@extends('layouts.base')

@section('contents')
@foreach ($comics as $comic)
<div class="card" style="width: 18rem;">
    <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $comic->series }}</h5>
      {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{ $comic->price}}</li>
      <li class="list-group-item">{{ $comic->title}}</li>
      <li class="list-group-item">{{ $comic->type}}</li>
    </ul>
    <div class="card-body">
      <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="card-link">show</a>
      <a href="">create</a>
    </div>
  </div>
@endforeach
@endsection