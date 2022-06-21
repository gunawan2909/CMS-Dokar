@extends('dokar.index')
@section('constrain')
    <div class="row" style="padding: 30px">
        <div class="col mb-2">
            <div class="d-flex justify-content-center rounded-4 p-4 " style="background-color: #8EB1C7; height: 140px;">
                <div class="  row">
                    <a id="judulekir">E-KIR <span>GROBOGAN</span></a>
                    <div class="row">
                        <form method="post" action="" id="input_container">
                            <div class="col">
                                <input class="form-control rounded-4" name="input_kir" type="text"
                                    placeholder="   NOMOR UJI">
                                <div id="petunjuk">
                                    <a>Masukkan nomor uji</a>
                                    <img src="src/help.png">
                                </div>
                            </div>
                            <div class="col">
                                <button id="cari_button" type="submit" name="submit">CARI</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-2">
            <div class="d-flex justify-content-center rounded-4 p-4 " style="background-color: #8EB1C7; height: 140px; ">
                <div class="row">
                    <div class="col">
                        <a id="judulantrian">ANTRIAN <span>SAAT INI</span></a>
                        <div id="tanggal_container">
                            <img class="img-fluid" src="src/kalender.png">
                            <a id="tgl"> {{ date('Y-m-d') }} </a>
                        </div>
                    </div>
                </div>
                <div class="col-4" id="jmlantrian">
                    <a id="jml">30</a>
                    <a>Kendaraan</a>
                </div>
            </div>
        </div>
    </div>

    @foreach ($catagories as $catagory)
        <div class="row ms-3">
            <div class="col">
                @if ($catagory->view != '3' || '4')
                    <div class="col">
                        <h1>{{ $catagory->name }}
                    </div>
                    <h6>{{ $catagory->describe }}</h6>
                @endif
                <div class="col align-self-center">

                    @include('dashboard.view')
                </div>

            </div>
        </div>
    @endforeach

    <div class="row">
        <div id="col">
            <a id="judul">Berita <span>& Informasi</span></a>
            <h6>Mengenal pengujian kendaraan bermotor Dishub Grobogan lebih jauh</h6>
        </div>
        <div id="berita_box">
            @foreach ($data_berita as $index => $berita)
                <div id="berita">
                    <div>
                        <img style="border-radius: 20px" id="fotoberita" src=" {{ $berita['fotopertama'] }}">
                    </div>
                    <div id="isiberita_box">
                        <a id="judul_berita" href="">{{ $berita['judul'] }} </a>
                        <h6 id="isiberita"> {{ $berita['isi'] }} </h6>
                        <a id="selengkapnya" href="">Selengkapnya</a>
                    </div>
                </div>


                <?php
                
                if ($index == '5') {
                    break;
                }
                ?>
            @endforeach
        </div>
    </div>
@endsection
