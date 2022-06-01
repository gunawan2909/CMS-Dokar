@extends('Dashboard.index')

@section('constrain')
    <a class="btn btn-outline-primary m-2" href="{{ Route('home.create') }}" role="button">Tambah Katagori Konten</a>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Selamat!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @foreach ($catagories as $catagory)
        <div class="container">
            <div class="col">

                <h1>{{ $catagory->name }}

                    <a href="{{ Route('home.edit', $catagory->id) }}" class="btn btn-warning"><span
                            data-feather="edit"></span></a>
                    <form action="{{ Route('home.destroy', $catagory->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger"><span data-feather="trash-2"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data {{ $catagory->name }}?')"></span></button>
                    </form>

            </div>

            <h6>{{ $catagory->describe }}</h6>
            @include('Dashboard.view')

        </div>
    @endforeach
@endsection
