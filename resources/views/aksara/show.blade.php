@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h3 class="mb-3">{{ $aksara->name }}</h3>

            <img src="{{ asset('storage/' . $aksara->materi) }}" alt="{{ $aksara->name }}" class="img-fluid mb-4">
            <img src="{{ asset('storage/' . $aksara->contoh) }}" alt="{{ $aksara->name }}" class="img-fluid mb-4">

            <article class="my-3 fs-5">
                {{ $aksara->message }}
            </article>
            <a href="/aksara" class="d-block mt-3">Back to the Post</a>
        </div>
    </div>
@endsection