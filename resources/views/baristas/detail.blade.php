@extends('layout.main')

@section('content')
    <div class="container">
        <div class="pb-3">
            <a href='{{ url('/baristas/barista') }}' class="btn btn-danger"> Kembali </a>
        </div>
        <h1 class="display-4 mb-4">Detail Barista</h1>

        <div class="form-group p-3" data-aos="fade-up">
            <label for="nama">Nama Barista</label>
            <input type="nama" id="nama" name="nama" value="{{ $barista->nama}}" class="form-control" readonly>
        </div>

        <div class="form-group p-3" data-aos="fade-up">
            <label for="umur">Desc Barista</label>
            <input type="int" id="umur" name="umur" value="{{ $barista->desc}}" class="form-control" readonly>
        </div>

        <div class="form-group p-3" data-aos="fade-up">
            <label for="kota">Points Kerja</label>
            <input type="text" id="kota" name="kota" value="{{ $barista->points }}" class="form-control" readonly>
        </div>

        <div class="form-group p-3" data-aos="fade-up">
            <label for="lahir">Mulai Karir</label>
            <input type="date" id="lahir" name="lahir" value="{{ $barista->karir }}" class="form-control" readonly>
        </div>
    </div>
@endsection
