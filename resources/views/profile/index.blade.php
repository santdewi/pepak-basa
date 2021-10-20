@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <article class="my-3 fs-5">
                <p class="mb-3">{{ $user->name }}</p>            
                <p>{{ $user->email }}</p>
            </article>
            <a href="/profile/edit" class="d-block mt-3">Update</a>
        </div>
    </div>
@endsection