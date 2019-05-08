<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sistem Kendaraan Dinas Operasional | KDO</title>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="sebuah sistem untuk memantau kendaraan dinas operasional dinas pemadam kebakaran.">
    <meta name="author" content="Fiqri Afrian Pratama">
    <!-- link external -->
    <link href="<?=base_url("assets/css/bootstrap.css")?>" rel="stylesheet">
    <link href="<?=base_url("assets/css/sb-admin.css")?>" rel="stylesheet">

    <!-- memanggil link datatables -->

    <link rel="stylesheet" type="text/css" href="<?=base_url("assets/DataTables/datatables.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/font-awesome/css/font-awesome.min.css")?>">
  
  </head>
  <body>

  <div id="wrapper">
    <!-- navigation bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <!-- navbar for desktop -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-brand" href="#">
          Kendaraan Dinas Operasional
        </div>
      </div>
      <!-- navbar for mobile -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
          <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li><a href="<?=site_url('mobil')?>"><i class="fa fa-table"></i> Kendaraan Dinas Mobil</a></li>
          <li><a href="<?=site_url('motor')?>"><i class="fa fa-table"></i> Kendaraan Dinas Motor</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right navbar-user">
          <li class="dropdown user-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?=site_url('auth/logout')?>"><i class="fa fa-power-off"></i> Log Out</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>

    <div id="page-wrapper">
      <?php echo $contents ?>
    </div>
  
  </div>
    <!-- link external -->
    <script src="<?=base_url("assets/js/jquery-1.10.2.js")?>"></script>
    <script src="<?=base_url("assets/js/bootstrap.js")?>"></script>
    <script src="<?=base_url("assets/DataTables/datatables.js")?>"></script>
    <script src="<?=base_url("assets/js/custom-data.js")?>"></script>
  </body>
</html>