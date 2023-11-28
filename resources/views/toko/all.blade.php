@extends('layout.main')


@section('content')
    <h1>ini adalah halaman toko</h1>

    <table class="table table-striped table-hover table-bordered">
        <thead class="table-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Peringkat</th>
            <th scope="col">Rate</th>
            <th scope="col">Rilis</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <?php
        $no = 1;
        ?>
        <tbody>
        @foreach($toko as $data)
            <tr>
                <th scope="row"><?= $no++ ?></th>
                <td>{{$data->nama}}</td>
                <td>{{$data->peringkat}}</td>
                <td>{{$data->rate}}</td>
                <td>{{$data->rilis}}</td>
                <td>
                    <a href="/toko/all/{{ $data->id }}"><button type="button" class="btn btn-info" ><i class="fa-solid fa-circle-info"></i> Info</button></a>
                </td>
            </tr>

        </tbody>
        @endforeach
    </table>



@endsection
