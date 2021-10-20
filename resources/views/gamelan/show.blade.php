@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h3 class="mb-3">{{ $gamelan->name }}</h3>            
            <img src="{{ $gamelan->image }}" alt="{{ $gamelan->name }}" class="img-fluid">

            <article class="my-3 fs-5">
                {{ $gamelan->credit }}
            </article>
            <a href="/gamelan" class="d-block mt-3">Back to the Post</a>
        </div>
    </div>
@endsection