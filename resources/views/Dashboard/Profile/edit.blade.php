@extends('Dashboard.index')

@section('constrain')
    <div class="border-bottom">
        <h1>Masukan data</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Selamat!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form action="{{ Route('profile.update', $catagory->id) }}" method="post">
        <button class="btn btn-primary mt-2" type="submit">Save <span data-feather="save"></span></button>
        <a href="{{ Route('content.create.content', $catagory->id) }}" class="btn btn-success mt-2">Tambah Konten <span
                data-feather="edit"></span></a>
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name_catagory" class="form-label">Nama Katagori Konten</label>
            <input class="form-control @error('name_catagory') is-invalid @enderror" id="name_catagory" name="name_catagory"
                autofocus value="{{ $catagory->name }}">
            @error('name_catagory')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <label for="view" class="form-label">View</label>
        <select class="form-select @error('view') is-invalid @enderror" name="view">
            <option {{ $catagory->view === '1' ? 'selected' : '' }} value="1">Tampilan 1</option>
            <option {{ $catagory->view === '2' ? 'selected' : '' }} value="2">Tampilan 2</option>
            <option {{ $catagory->view === '3' ? 'selected' : '' }} value="3">Tampilan 3</option>
            <option {{ $catagory->view === '4' ? 'selected' : '' }} value="4">Tampilan 4</option>
            <option {{ $catagory->view === '5' ? 'selected' : '' }} value="5">Tampilan 5</option>
            <option {{ $catagory->view === '6' ? 'selected' : '' }} value="6">Tampilan 6</option>
        </select>
        @error('view')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        <div class="mb-3">

            <label for="describe" class="form-label">Keterangan Katagori Konten</label>
            <textarea class="form-control @error('describe') is-invalid @enderror" id="describe" name="describe" rows="3">{{ $catagory->describe }}
            </textarea>
            @error('describe')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


    </form>
    <div class="row row-cols-4">
        @foreach ($catagory->content as $item)
            <div class="card m-1" style="width: 18rem;">

                <img src="{{ asset('storage/' . $item->directory) }}" class="card-img-top">
                <div class="card-body">
                    <h4>{{ $item->name }}</h4>
                    {!! $item->body !!}
                </div>
                <div class="mt-auto mb-2">
                    <a href="{{ Route('content.edit', $item->id) }}" class="btn btn-warning"><span
                            data-feather="edit"></span></a>
                    <form action="{{ Route('content.destroy', $item->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger"><span data-feather="trash-2"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data {{ $catagory->name }}?')"></span></button>
                    </form>

                </div>
            </div>
        @endforeach
    </div>
@endsection
