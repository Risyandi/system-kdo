  <!-- dashboard breadcumb -->
  <div class="row">
    <div class="col-lg-12">
      <h1>Dashboard</h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
      </ol>
      <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Selamat Datang di web pendataan kendaraan dinas operasional Sudin Penanggulangan Kebakaran dan Penyelamatan Provinsi DKI Jakarta 
      </div>
    </div>
  </div>

  <!-- dashboar number -->
  <div class="row">
    <div class="col-lg-3">
      <div class="panel panel-success">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-6">
              <i class="fa fa-check fa-5x"></i>
            </div>
            <div class="col-xs-6 text-right">
            <?php foreach ($mobilBaik->result() as $key => $data) {  ?>
                <p class="announcement-heading"><?= $data->count?></p>
              <?php } ?>
              <p class="announcement-text">Unit Mobil Baik</p>
            </div>
          </div>
        </div>
        <a href="#">
          <div class="panel-footer announcement-bottom">
            <div class="row">
              <div class="col-xs-6">
              <a href="<?php echo base_url("mobil");?>">
                Lihat Data
              </a>
              </div>
              <div class="col-xs-6 text-right">
                <i class="fa fa-arrow-circle-right"></i>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="panel panel-success">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-6">
              <i class="fa fa-check fa-5x"></i>
            </div>
            <div class="col-xs-6 text-right">
            <?php foreach ($motorBaik->result() as $key => $data) {  ?>
                <p class="announcement-heading"><?= $data->count?></p>
              <?php } ?>
              <p class="announcement-text">Unit Motor Baik</p>
            </div>
          </div>
        </div>
        <a href="#">
          <div class="panel-footer announcement-bottom">
            <div class="row">
              <div class="col-xs-6">
              <a href="<?php echo base_url("motor");?>">
                Lihat Data
              </a>
              </div>
              <div class="col-xs-6 text-right">
                <i class="fa fa-arrow-circle-right"></i>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="panel panel-danger">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-6">
              <i class="fa fa-tasks fa-5x"></i>
            </div>
            <div class="col-xs-6 text-right">
            <?php foreach ($mobilRusak->result() as $key => $data) {  ?>
                <p class="announcement-heading"><?= $data->count?></p>
              <?php } ?>
              <p class="announcement-text">Unit Mobil Rusak</p>
            </div>
          </div>
        </div>
        <a href="#">
          <div class="panel-footer announcement-bottom">
            <div class="row">
              <div class="col-xs-6">
              <a href="<?php echo base_url("mobil");?>">
                Lihat Data
              </a>
              </div>
              <div class="col-xs-6 text-right">
                <i class="fa fa-arrow-circle-right"></i>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="panel panel-danger">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-6">
              <i class="fa fa-tasks fa-5x"></i>
            </div>
            <div class="col-xs-6 text-right">
            <?php foreach ($motorRusak->result() as $key => $data) {  ?>
                <p class="announcement-heading"><?= $data->count?></p>
              <?php } ?>
              <p class="announcement-text">Unit Motor Rusak</p>
            </div>
          </div>
        </div>
        <a href="#">
          <div class="panel-footer announcement-bottom">
            <div class="row">
              <div class="col-xs-6">
              <a href="<?php echo base_url("motor");?>">
                Lihat Data
              </a>
              </div>
              <div class="col-xs-6 text-right">
                <i class="fa fa-arrow-circle-right"></i>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>

  <!-- dasboard row datatable -->
  <div class="row">
    <div class="col-lg-12">
      <h4> Tampilkan data : 
        <div class="btn-group" >
        <button type="button" class="btn btn-default">Sektor</button>
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#">Sektor I</a></li> <li class="divider"></li>
          <li><a href="#">Sektor II</a></li> <li class="divider"></li>
          <li><a href="#">Sektor III</a> </li><li class="divider"></li>
          <li><a href="#">Sektor IV</a></li> <li class="divider"></li>
          <li><a href="#">Sektor V</a></li> <li class="divider"></li>
          <li><a href="#">Sektor VI</a></li> <li class="divider"></li>
          <li><a href="#">Sektor VII</a></li> <li class="divider"></li>
          <li><a href="#">Sektor VIII</a></li> <li class="divider"></li>
        </ul>
      </h4>
    </div>
  </div>

  <!-- datatable -->
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> List Data</h3>
        </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" style="margin-bottom:0px;">
                <thead> 
                  <tr>
                    <th>No. </th>
                    <th>Plat No</th>
                    <th>Nomer Mesin</th>
                    <th>Nomer rangka</th>
                    <th>Sektor</th>
                    <th>Nomer Mobil</th>
                    <th>Tipe Mobil</th>
                    <th>Merk Mobil</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Lorem ipsum dolor sit amet</td>
                    <td>Lorem ipsum dolor sit amet</td>
                    <td>Lorem ipsum dolor sit amet</td>
                    <td>Lorem ipsum dolor sit amet</td>
                    <td>Lorem ipsum dolor sit amet</td>
                    <td>Lorem ipsum dolor sit amet</td>
                    <td>Lorem ipsum dolor sit amet</td>
                    <td>Lorem ipsum dolor sit amet</td>
                    <td>Lorem ipsum dolor sit amet</td>
                  </tr>
                </tbody>
               </table>
             </div>
            </div>
          </div>
      </div>
    </div>
  </div>