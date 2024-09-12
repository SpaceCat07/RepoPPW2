<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@include('layouts.boot')

    <div class="mx-5 px-5 mt-5">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Harga</th>
                    <th>Tanggal Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataBuku as $index => $buku )
                    <tr>
                        <td>{{$urut++}}</td>
                        <td>{{$buku -> judul}}</td>
                        <td>{{$buku -> penulis}}</td>
                        <td>{{"Rp. ".number_format($buku -> harga, 2, ',', '.')}}</td>
                        <td>{{$buku -> tgl_terbit->format('d/m/Y')}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <h1>data yang berada di table adalah {{$res}}</h1>
    <h1>{{"Total harga dari setiap buku adalah Rp. ".number_format($total, 2, ',','.')}}</h1>

</body>
</html>