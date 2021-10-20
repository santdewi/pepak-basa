@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h3 class="mb-3">{{ $pamasastra->name }}</h3>            
            <img src="{{ asset('storage/' . $pamasastra->materi) }}" alt="{{ $pamasastra->name }}" class="img-fluid">
            <a href="/pamasastra" class="d-block mt-3">Back to the Post</a>
        </div>
    </div>
@endsection