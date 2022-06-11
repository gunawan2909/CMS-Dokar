@extends('Dashboard.index')

@section('constrain')
    <div class="border-bottom">
        <h1>Masukan data</h1>
    </div>

    <form action="{{ Route('content.update', $content->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <input type="hidden" name="Catagory_id" value="{{ $content->Catagory_id }}">
            <input type="hidden" name="old_image" value="{{ $content->directory }}">
            <label for="name" class="form-label">Nama Konten</label>
            <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus
                value="{{ $content->name }}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Gambar</label>
            @if ($content->directory)
                <img class="img-preview img-fluid col-3 m-2" src="{{ asset('storage/' . $content->directory) }}"
                    style="display: block; width: 200px">
            @else
                <img class="img-preview img-fluid col-3 m-2">
            @endif
            <div class="input-group mb-3">
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image"
                    onchange="previewImage()">
                <label class="input-group-text" for="image">Upload</label>
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Keterangan Katagori Konten</label>
            <input id="body" type="hidden" name="body" value="{{ $content->body }}">
            <trix-editor input="body"></trix-editor>
            @error('body')
                <p class="text-danger"> {{ $message }} </p>
            @enderror
        </div>
        <button class="btn btn-primary" type="submit">Save</button>

    </form>
@endsection
