<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static {
            position: relative;
            /* left: 3%; */
            border: 1px solid #543535;
        }
    
        </style>     
        <title>CETAK DATA SURAT</title> 
</head>
<body>
    <div clas="form-group">
        <p align="center"><b>Laporan Data Surat</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th>Id</th>
                <th>Nama Surat</th>
                <th>Perihal</th>
                <th>Ditunjukkan</th>
                <th>Tanggal Surat</th>
                <th>Penerima</th>
            </tr>
            @foreach ($cetakkeluar as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_surat }}</td>
                <td>{{ $item->perihal }}</td>
                <td>{{ $item->ditunjukkan }}</td>
                <td>{{ $item->tanggal_surat }}</td>
                <td>{{ $item->penerima }}</td>
            </tr>
            @endforeach
        </table>
    </div> 
    
    <script type="text/javascript">
        window.print();
    
    </script>
</body>
</html>