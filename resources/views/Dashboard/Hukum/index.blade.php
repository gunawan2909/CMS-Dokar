@extends('dashboard.index')

@section('constrain')
    <a class="btn btn-outline-primary m-2" href="{{ Route('hukum.create') }}" role="button">Tambah Data</a>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Selamat!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @foreach ($catagories as $catagory)
        <div class="container">
            <h1>{{ $catagory->name }}
        </div>

        <h6>{{ $catagory->describe }}</h6>

        <div class="col">
            @foreach ($catagory->content as $item)
                <div class="row m-2">
                    <div class="card">
                        <div class="row m-2">
                            <div class="col ">
                                <a class="btn btn-primary " href="" role="button">{{ $item->name }}</a>
                            </div>
                            <div class="col ">
                                <h4>
                                    {{ pathinfo('storage/' . $item->directory, PATHINFO_EXTENSION) }}
                                </h4>
                            </div>
                            <div class="col">
                                <a class="btn btn-success " href="{{ Route('hukum.download', $item->id) }}"
                                    role="button">Download</a>
                            </div>
                            <div class="col ">
                                <form action="{{ Route('hukum.destroy', $item->id) }}" method="POST"
                                    class="d-flex justify-content-end">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger"><span data-feather="trash-2"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data {{ $catagory->name }}?')"></span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    @endforeach
@endsection
