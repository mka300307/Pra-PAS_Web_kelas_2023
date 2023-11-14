@extends('layout.main')

@section('content')
    <h1>ini adalah halaman barista</h1>

    <table class="table table-striped table-hover table-bordered">
        <thead class="table-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Favorite Coffe</th>
            <th scope="col">Points Kerja</th>
            <th scope="col">Karir</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <?php
        $no = 1;
        ?>
        <tbody>
        @foreach($barista as $data)
            <tr>
                <th scope="row"><?= $no++ ?></th>
                <td>{{$data['nama']}}</td>
                <td>{{$data['favorite']}}</td>
                <td>{{$data['points']}}</td>
                <td>{{$data['karir']}}</td>
                <td>
                    <a href="/baristas/detail/{{$data->id}}"><button type="button" class="btn btn-info" ><i class="fa-solid fa-circle-info"></i> Info</button></a>
                </td>
            </tr>

        </tbody>
        @endforeach
    </table>



@endsection
