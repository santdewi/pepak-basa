@extends('layouts.main')

@section('container')
    <div class="row my-3">
        <div class="col">
            @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif

            <a href="/krama/create" class="btn btn-primary text-white mb-3">
                <i class="fas fa-plus me-2"></i>Create
            </a>
            <table class="table bg-white rounded shadow-sm table-hover">
                <thead>
                    <tr>
                        <th scope="col" width="50">No.</th>
                        <th scope="col">Ngoko</th>
                        <th scope="col">Krama Madya</th>
                        <th scope="col">Krama Inggil</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($krama as $item)                    
                    <tr>
                        <th scope="row">{{ ++$i }}</th>
                        <td>{{ $item->ngoko }}</td>
                        <td>{{ $item->krama_madya }}</td>
                        <td>{{ $item->krama_inggil }}</td>
                        <td class="actions">
                            <a href="/krama/{{ $item->id }}/edit" class="badge bg-light text-dark">
                                <i class="fas fa-pen"></i>
                            </a>
                            <form action="/krama/{{ $item->id }}" method="POST" class="d-inline">
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
                {{ $krama->links() }}
            </div>
        </div>
    </div>
@endsection