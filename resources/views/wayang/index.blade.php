@extends('layouts.main')

@section('container')
    <div class="row my-3">
        <div class="col">
            @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif
            <a href="/wayang/create" class="btn btn-primary text-white mb-3">
                <i class="fas fa-plus me-2"></i>Create
            </a>
            <table class="table table-responsive bg-white rounded shadow-sm  table-hover">
                <thead>
                    <tr>
                        <th scope="col" width="50">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Credit</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wayang as $item)
                    <tr>
                        <th scope="row">{{ ++$i }}</th>
                        <td>{{ $item->name }}</td>
                        <td><img src="{{ $item->image }}" alt="{{ $item->name }}" class="img-fluid" height="50px" width="100px"></td>
                        <td>{{ $item->credit }}</td>
                        <td class="actions">
                            <a href="/wayang/{{ $item->slug }}" class="badge bg-light text-dark">
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="/wayang/{{ $item->slug }}/edit" class="badge bg-light text-dark">
                                <i class="fas fa-pen"></i>
                            </a>
                            <form action="/wayang/{{ $item->slug }}" method="POST" class="d-inline">
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
                {{ $wayang->links() }}
            </div>
        </div>
    </div>
@endsection