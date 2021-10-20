@extends('layouts.main')

@section('container')
    <div class="row my-3">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <div class="card-title text-white">Create Data</div>
                </div>
                <form method="POST" action="/aksara" class="form-floating" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" required value="{{ old('slug') }}">
                            @error('slug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="material_id" class="form-label">ID Materi</label>
                            <input type="number" class="form-control" id="material_id" name="material_id" required value="{{ old('material_id') }}">
                        </div>
                        <div class="mb-3">
                            <label for="materi" class="form-label">Materi</label>
                            <img class="materi-preview img-fluid mb-3 col-sm-5">
                            <input class="form-control @error('materi') is-invalid @enderror" type="file" id="materi" name="materi" onchange="previewMateri()" required>
                            @error('materi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="contoh" class="form-label">Contoh</label>
                            <img class="contoh-preview img-fluid mb-3 col-sm-5">
                            <input class="form-control @error('contoh') is-invalid @enderror" type="file" id="contoh" name="contoh" onchange="previewContoh()" required>
                            @error('contoh')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control @error('message') is-invalid @enderror"required value="{{ old('message') }}"></textarea>
                            @error('message')
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

    <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener('change', function() {
            fetch('/aksaras/checkSlug?name=' + name.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        function previewMateri() {
            const materi = document.querySelector('#materi');
            const materiPreview = document.querySelector('.materi-preview');

            materiPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(materi.files[0]);

            oFReader.onload = function(oFREvent) {
                materiPreview.src = oFREvent.target.result;
            }
        }

        function previewContoh() {
            const contoh = document.querySelector('#contoh');
            const contohPreview = document.querySelector('.contoh-preview');

            contohPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(contoh.files[0]);

            oFReader.onload = function(oFREvent) {
                contohPreview.src = oFREvent.target.result;
            }
        }
        
        
    </script>
@endsection