@extends('layout.main')

@section('content')
    <div class="container">
        <div class="pb-3">
            <a href='{{ url('/toko/all') }}' class="btn btn-danger"> Kembali </a>
        </div>
        <h1 class="display-4 mb-4">Detail Coffe</h1>

        <div class="form-group p-3" data-aos="fade-up">
            <label for="nama">Nama Toko</label>
            <input type="nama" id="nama" name="nama" value="{{ $toko->nama }}" class="form-control" readonly>
        </div>

        <div class="form-group p-3" data-aos="fade-up">
            <label for="umur">Desc Toko</label>
            <input type="int" id="umur" name="umur" value="{{ $toko->desc }}" class="form-control" readonly>
        </div>

        <div class="form-group p-3" data-aos="fade-up">
            <label for="kota">Peringkat</label>
            <input type="text" id="kota" name="kota" value="{{ $toko->peringkat }}" class="form-control" readonly>
        </div>

        <div class="form-group p-3" data-aos="fade-up">
            <label for="kota">Rate</label>
            <input type="text" id="kota" name="kota" value="{{ $toko->rate }}" class="form-control" readonly>
        </div>

        <div class="form-group p-3" data-aos="fade-up">
            <label for="lahir">Rilis</label>
            <input type="date" id="lahir" name="lahir" value="{{ $toko->rilis }}" class="form-control" readonly>
        </div>
    </div>
@endsection
