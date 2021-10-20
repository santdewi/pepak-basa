@extends('layouts.main')

@section('container')

<div class="row">
    <div class="col">
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        <a href="/aksara/create" class="btn btn-primary text-white mb-3">
            <i class="fas fa-plus me-2"></i>Create
        </a>
        <table class="table bg-white rounded shadow-sm  table-hover">
            <thead>
                <tr>
                    <th scope="col" width="50">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Materi</th>
                    <th scope="col">Contoh</th>
                    <th scope="col" width="250">Message</th>
                    <th scope="col" width="150">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aksara as $item)
                <tr>
                    <th scope="row">{{ ++$i }}</th>
                    <td>{{ $item->name }}</td>
                    <td><img src="{{ asset('storage/' . $item->materi) }}" alt="{{ $item->name }}" class="img-fluid" height="100px" width="200px"></td>
                    <td><img src="{{ asset('storage/' . $item->contoh) }}" alt="{{ $item->name }}" class="img-fluid" height="100px" width="200px"></td>
                    <td>{{ $item->message }}</td>
                    <td class="actions">
                        <a href="/aksara/{{ $item->slug }}" class="badge bg-light text-dark">
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="/aksara/{{ $item->slug }}/edit" class="badge bg-light text-dark">
                            <i class="fas fa-pen"></i>
                        </a>
                        <form action="/aksara/{{ $item->slug }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-light text-dark border-0" onclick="return confirm('Are yoou sure?')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {{ $aksara->links() }}
        </div>
    </div>
</div>
    
@endsection