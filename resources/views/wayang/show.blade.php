@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h3 class="mb-3">{{ $wayang->name }}</h3>            
            <img src="{{ $wayang->image }}" alt="{{ $wayang->name }}" class="img-fluid">

            <article class="my-3 fs-5">
                {{ $wayang->credit }}
            </article>
            <a href="/wayang" class="d-block mt-3">Back to the Post</a>
        </div>
    </div>
@endsection