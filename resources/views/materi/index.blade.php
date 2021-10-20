@extends('layouts.main')

@section('container')
    <div class="row my-3">
        <div class="col">
            @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif

            <a href="/materi/create" class="btn btn-primary text-white mb-3">
                <i class="fas fa-plus me-2"></i>Create
            </a>

            <table class="table table-responsive align-middle bg-white rounded shadow-sm table-hover">
                <thead>
                    <tr>
                        <th scope="col" width="50">No.</th>
                        <th scope="col" width="100">Nama</th>
                        <th scope="col" width="400">Message</th>
                        <th scope="col" width="150">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($materials as $material)
                    <tr>
                        <th scope="row">{{ ++$i }}</th>
                        <td>{{ $material->name }}</td>
                        <td>{{ $material->message }}</td>
                        <td class="actions">
                            {{-- <a href="/materi/{{ $material->slug }}" class="badge bg-light text-dark">
                                <i class="far fa-eye"></i>
                            </a> --}}
                            <a href="/materi/{{ $material->slug }}/edit" class="badge bg-light text-dark">
                                <i class="fas fa-pen"></i>
                            </a>
                            <form action="/materi/{{ $material->slug }}" method="POST" class="d-inline">
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
                {{ $materials->links() }}
            </div>

            
        </div>
    </div>
@endsection