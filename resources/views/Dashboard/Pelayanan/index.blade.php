@extends('Dashboard.index')

@section('constrain')
    <a class="btn btn-outline-primary m-2" href="{{ Route('pelayanan.create') }}" role="button">Tambah Katagori Konten</a>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Selamat!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @foreach ($catagories as $catagory)
        <div class="container mb-5">
            <div class="col">
                <h1>{{ $catagory->name }}
                    <a href="{{ Route('pelayanan.edit', $catagory->id) }}" class="btn btn-warning"><span
                            data-feather="edit"></span></a>
                    <form action="{{ Route('pelayanan.destroy', $catagory->id) }}" method="POST" class="d-inline">
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












    {{-- <link rel="stylesheet" href="/css/homestyle.css">
    <div class="d-grid gap-2">
       
    </div>
    @foreach ($constrains as $constrain)
        <div>
            <div class="syarat_box">
                <div id="judul_syarat_container">
                    <a id="judul_syarat">{{ $constrain->name }}

                    </a>

                    <h6>{{ $constrain->describe }}</h6>
                </div>

                <div id="syaratitem_container">
                    @foreach ($constrain->content as $item)
                        <div id="item_container">
                            <div id="containerjudul">
                                <div>
                                    <img src="{{ $item->directory }}">
                                </div>
                                <a id="judul_item">{{ $item->name }}</a>
                            </div>
                            <div id="item_list">
                                {!! $item->body !!}
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>


        </div> --}}

    {{-- <div class="selesai_bg">
        <div id="selesai_container">
            <div id="judul_selesai_container">
                <a id="judul_selesai">Selesai <span>Uji</span></a>
                <h6></h6>
            </div>
            <div id="kendaraan_container">

            </div>
        </div>

    </div> --}}
@endsection
