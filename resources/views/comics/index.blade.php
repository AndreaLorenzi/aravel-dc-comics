@extends('layouts.base')

@section('contents')

<div class="container my-5">
    <div class="row row-cols-3">
        @foreach ($comics as $comic)
        <div class="col">
            <div class="myCard">
                <div class="innerCard">
                    <div class="frontSide">
                        <h5 class="card-title">{{ $comic->series }}</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $comic->price}}</li>
                            <li class="list-group-item">{{ $comic->title}}</li>
                            <li class="list-group-item">{{ $comic->type}}</li>
                            </ul>
                    </div>
                    <div class="backSide">
                        <img style="width: 100%;height:100%;border-radius:10px" src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                    </div>
                </div>
            </div> 
            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="card-link text-center">show</a>
            <div class="">
                <a class="btn btn-warning" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Edit</a>
            </div>
        </div>
    
        @endforeach
        
    </div>
    {{ $comics->links() }}
</div>

@endsection
   {{-- <div class="card">
            <img style="width: 100%" src="{{ $comic->thumb }}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $comic->series }}</h5>
            {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
            {{-- </div>
            <ul class="list-group list-group-flush">
            <li class="list-group-item">{{ $comic->price}}</li>
            <li class="list-group-item">{{ $comic->title}}</li>
            <li class="list-group-item">{{ $comic->type}}</li>
            </ul>
            <div class="card-body">
            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="card-link text-center">show</a>
            
            </div>  --}}