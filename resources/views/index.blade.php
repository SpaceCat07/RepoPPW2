<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('buku.create')}}" class="btn btn-primary float-end">Tambah Buku</a>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>author</th>
                <th>price</th>
                <th>date published</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataBuku as $buku)
                <tr>
                    <td>{{$buku->id}}</td>
                    <td>{{$buku->judul}}</td>
                    <td>{{$buku->penulis}}</td>
                    <td>{{"RP.".number_format($buku -> harga,2,',','.')}}</td>
                    <td>{{\Carbon\Carbon::parse($buku->tgl_terbit)->format('d-m-Y')}}</td>
                    <td> <button href="/buku/{{$buku->id}}">Detail</button> </td>
                    <td>
                        <form action="{{route('buku.destroy', $buku -> id)}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button onclick="return confirm('hapus dick?')" type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{route('buku.edit', $buku -> id)}}">Ubah Pri</a>
                        <!-- <form method="post" href="{{route('buku.edit', $buku->id)}}">
                            <button type="submit">Ubah Pri</button>
                        </form> -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h1>Total Books : {{$res}}</h1>
    <h1>{{"Total harga dari buku adalah ".number_format($total,2,',','.')}}</h1>
</body>
</html>