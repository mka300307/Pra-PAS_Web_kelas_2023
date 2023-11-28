@extends('layout.main')

@section('content')
    <div class="container">
        <div class="pb-3">
            <a href='{{ url('/kopi/coffe') }}' class="btn btn-danger"> Kembali </a>
        </div>
        <h1 class="display-4 mb-4">Detail Coffe</h1>

        <div class="form-group p-3" data-aos="fade-up">
            <label for="nama">Nama Coffe</label>
            <input type="nama" id="nama" name="nama" value="{{ $coffe->name }}" class="form-control" readonly>
        </div>

        <div class="form-group p-3" data-aos="fade-up">
            <label for="umur">Desc Coffe</label>
            <input type="int" id="umur" name="umur" value="{{ $coffe->desc }}" class="form-control" readonly>
        </div>

        <div class="form-group p-3" data-aos="fade-up">
            <label for="kota">Price</label>
            <input type="text" id="kota" name="kota" value="${{ $coffe->price }}.00" class="form-control" readonly>
        </div>

        <div class="form-group p-3" data-aos="fade-up">
            <label for="lahir">Rilis</label>
            <input type="date" id="lahir" name="lahir" value="{{ $coffe->rilis }}" class="form-control" readonly>
        </div>
    </div>
@endsection
