<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Surat Masuk</title>  
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Surat Masuk
                </div>
                <div class="card-body">
                    <a href="/suratmasuk/create" class="btn btn-primary">Tambah Surat</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama Surat</th>
                                <th>Perihal</th>
                                <th>Ditunjukkan</th>
                                <th>Tanggal Surat</th>
                                <th>Pengirim</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($suratmasuk as $i => $p)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $p->nama_surat }}</td>
                                <td>{{ $p->perihal }}</td>
                                <td>{{ $p->ditunjukkan }}</td>
                                <td>{{ date('d-m-Y', strtotime($p->tanggal_surat)) }}</td>
                                <td>{{ $p->pengirim }}</td>
                                <td>
                                    <a href="/suratmasuk/edit/{{ $p->id }}" class="btn btn-primary">Edit</a>
                                    <a href="/suratmasuk/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>