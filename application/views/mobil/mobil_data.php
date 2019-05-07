<div class="row">
    <div class="col-lg-12">
        <h2>Data Mobil Operasional</h2>
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-dashboard"></i> 
            <a href="<?php echo base_url();?>">
                Dashboard
            </a>
            / Data Mobil Operasional
            </li>
        </ol>
    </div>
    <div class="col-lg-12">
        <a href="<?=site_url('mobil/add') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
    </div>
</div>
<br>

<div class="row">
	<div class="col-lg-12">
		<div class="table-responsive">
            <table class="table table-bordered table-hover table-striped tablesorter">
                <thead>
                <tr>
                    <th>No. <i class="fa fa-sort"></i></th>
                    <th>Plat No</th>
                    <th>Nomer Mesin</th>
                    <th>Nomer Rangka</th>
                    <th>Sektor <i class="fa fa-sort"></i></th>
                    <th>Nomer Mobil</th>
                    <th>Tipe Mobil</th>
                    <th>Merk Mobil <i class="fa fa-sort"></i></th>
                    <th>Keterangan <i class="fa fa-sort"></i></th>
                    <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($row->result() as $key => $data) { ?>
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->plat_no?></td>
                        <td><?=$data->no_mesin?></td>
                        <td><?=$data->no_rangka?></td>
                        <td><?=$data->sektor?></td>
                        <td><?=$data->no_mobil?></td>
                        <td><?=$data->tipe_mobil?></td>
                        <td><?=$data->merk_mobil?></td>
                        <td><?=$data->keterangan?></td>
                        <td>
                        <form action="<?=site_url('mobil/del')?>" method="post">
                            <a href="<?=site_url('mobil/edit/'.$data->id_mobil)?>" class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i> Ubah
                            </a>
                            <input type="hidden" name="id_mobil" value="<?=$data->id_mobil?>">
                            <button onclick="return confirm('Yakin Hapus Data?')" class="btn btn-danger btn-xs">
                                <i class="fa fa-minus-circle"></i> Hapus
                            </button>
                        </form>
                        </td>
                    </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
