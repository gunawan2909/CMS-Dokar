@extends('Dashboard.index')

@section('constrain')
    <div class="border-bottom">
        <h1>Masukan data</h1>
    </div>
    <form action="{{ Route('hukum.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <input type="hidden" name="Catagory_id" value="{{ $catagory[0]->id }}">
            <input type="hidden" name="page" value="hukum">
            <label for="name" class="form-label">Nama file</label>
            <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus
                value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="file" class="form-label">Gambar</label>
            <div class="input-group mb-3">
                <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file">
                <label class=" input-group-text" for="file">Upload</label>
                @error('file')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Save</button>

    </form>
@endsection
