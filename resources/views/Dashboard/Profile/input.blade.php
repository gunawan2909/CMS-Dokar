@extends('Dashboard.index')

@section('constrain')
    <div class="border-bottom">
        <h1>Masukan data</h1>
    </div>
    <form action="{{ Route('profile.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name_catagory" class="form-label">Nama Katagori Konten</label>
            <input class="form-control @error('name_catagory') is-invalid @enderror" id="name_catagory" name="name_catagory"
                autofocus value="{{ old('name_catagory') }}">
            @error('name_catagory')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>
        <div class="mb-3">
            <label for="describe" class="form-label">Keterangan Katagori Konten</label>
            <textarea class="form-control @error('describe') is-invalid @enderror" id="describe" name="describe"
                rows="3">{{ old('describe') }}</textarea>
            @error('describe')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button class="btn btn-primary" type="submit">Save</button>

    </form>
@endsection
