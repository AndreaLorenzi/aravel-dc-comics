@extends('layouts.base')

@section('contents')
        {{-- <img src="{{ Vite::asset('resources/img/picsum30.jpg') }}" alt=""> --}}
        <h1 class="text-center text-light">Laravel Comics</h1>
    <div class="d-flex flex-column">
        
        <div class="bat-btn">
            <button class="bat_button">
                <span><a href="{{ route('comics.index') }}">ARCHIVE COMICS
                </a></span>
            </button>
        </div>
        <div class="ins_btn">
            <button class="ins_button">
                <a href="{{ route('comics.create') }}">INSERT NEW COMIC</a>
            </button>
        </div>
    </div>
@endsection
 