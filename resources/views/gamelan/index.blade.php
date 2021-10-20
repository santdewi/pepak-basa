@extends('layouts.main')

@section('container')
    <div class="row my-3">
        <div class="col">
            @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif

            <a href="/gamelan/create" class="btn btn-primary text-white mb-3">
                <i class="fas fa-plus me-2"></i>Create
            </a>

            <table class="table table-responsive align-middle bg-white rounded shadow-sm table-hover">
                <thead>
                    <tr>
                        <th scope="col" width="50">No.</th>
                        <th scope="col" width="100">Nama</th>
                        <th scope="col" width="400">Gambar</th>
                        <th scope="col" width="200">Credit</th>
                        <th scope="col" width="150">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gamelans as $gamelan)
                    <tr>
                        <th scope="row">{{ ++$i }}</th>
                        <td>{{ $gamelan->name }}</td>
                        <td><img src="{{ $gamelan->image }}" alt="{{ $gamelan->name }}" class="img-fluid" height="100px" width="200px"></td>
                        <td>{{ $gamelan->credit }}</td>
                        <td class="actions">
                            <a href="/gamelan/{{ $gamelan->slug }}" class="badge bg-light text-dark">
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="/gamelan/{{ $gamelan->slug }}/edit" class="badge bg-light text-dark">
                                <i class="fas fa-pen"></i>
                            </a>
                            <form action="/gamelan/{{ $gamelan->slug }}" method="POST" class="d-inline">
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
                {{ $gamelans->links() }}
            </div>

            
        </div>
    </div>
@endsection