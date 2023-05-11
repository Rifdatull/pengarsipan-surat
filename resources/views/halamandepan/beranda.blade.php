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
            <h1 class="m-0">Data Surat</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   <!-- Main content -->
   <section class="content"> 
    <div class="container-fluid"> 
      <!-- Small boxes (Stat box) --> 
      <div class="row"> 
        <div class="col-lg-3 col-6"> 
          <!-- small box --> 
          <div class="small-box bg-success"> 
            <div class="inner"> 
              <h3>{{ $suratmasuk }}</h3>
              <p>Surat Masuk</p> 
            </div> 
            <div class="icon"> 
            </div> 
            <a href="/suratmasuk" class="small-box-footer">Info Selengkapnya<i class="fas fa-arrow-circle-right"></i></a>
          </div>
          </div> 
          <!-- ./col --> 
          <div class="col-lg-3 col-6"> 
            <!-- small box --> 
            <div class="small-box bg-danger"> 
              <div class="inner"> 
                <h3>{{ $suratkeluar }}</h3> 
                <p>Surat Keluar</p> 
              </div> 
              <div class="icon"> 
              </div> 
              <a href="/suratkeluar" class="small-box-footer">Info Selengkapnya<i class="fas fa-arrow-circle-right"></i></a>
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
