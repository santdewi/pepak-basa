@extends('layouts.main')

@section('container')
    <div class="row my-3">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <div class="card-title text-white">Create Data</div>
                </div>
                <form method="POST" action="/krama" class="form-floating">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="material_id" class="form-label">Materi</label>
                            <input type="number" class="form-control @error('material_id') is-invalid @enderror" id="material_id" name="material_id" value="{{ old('material_id') }}" required>
                            @error('material_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="ngoko" class="form-label">Ngoko</label>
                            <input type="text" class="form-control @error('ngoko') is-invalid @enderror" id="ngoko" name="ngoko" value="{{ old('ngoko') }}" required>
                            @error('ngoko')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="krama_madya" class="form-label">Krama Madya</label>
                            <input type="text" class="form-control @error('krama_madya') is-invalid @enderror" id="krama_madya" name="krama_madya" value="{{ old('krama_madya') }}" required>
                            @error('krama_madya')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="krama_inggil" class="form-label">Krama Inggil</label>
                            <input type="text" class="form-control @error('krama_inggil') is-invalid @enderror" id="krama_inggil" name="krama_inggil" value="{{ old('krama_inggil') }}" required>
                            @error('krama_inggil')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection