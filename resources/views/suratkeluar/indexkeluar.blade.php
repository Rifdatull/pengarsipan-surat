<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Surat Keluar</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data Surat Keluar
                </div>
                <div class="card-body">
                    <a href="/suratkeluar/create" class="btn btn-primary">Tambah Surat</a>
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
                                <th>Penerima</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($suratkeluar as $i => $p)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $p->nama_surat }}</td>
                                <td>{{ $p->perihal }}</td>
                                <td>{{ $p->ditunjukkan }}</td>
                                <td>{{ date('d-m-Y', strtotime($p->tanggal_surat)) }}</td>
                                <td>{{ $p->penerima }}</td>
                                <td>
                                    <a href="/suratkeluar/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/suratkeluar/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                    <a href="/suratkeluar/detail/{{ $p->id }}" class="btn btn-info">Detail</a>
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