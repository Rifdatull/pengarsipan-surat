<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Surat Masuk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Surat Masuk</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   <!-- Main content -->
   <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
              </div>
            </div>
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
                </div>
                <div class="card-body">
                    <a href="/suratmasuk/create" class="btn btn-primary">Tambah Surat <i class="fas fa-plus-square"></i></a>
                    <a href="{{ route('cetakmasuk') }}" target="_blank" class="btn btn-success">Cetak Surat <i class="fas fa-print"></i></a>
                <br/>
                <br/>
                    <table class="table table-bordered table-hover table-striped" id="table-data">
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
                                    <a href="/suratmasuk/edit/{{ $p->id }}" class="btn btn->warning"><i class="fa fa-edit"></i></a>
                                    <a href="/suratmasuk/hapus/{{ $p->id }}" class="btn btn->success" onClick="return confirm('Yakin Ingin dihapus?')"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>
</div>
    </div><!-- /.card -->
        </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              </div>
            </div>
              </div>
            </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    @include('template.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
      @include('template.script')
</body>
</html>
