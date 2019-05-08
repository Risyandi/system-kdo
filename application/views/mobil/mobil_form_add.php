<div class="row">
    <div class="col-lg-12">
        <h2>Data Mobil</h2>
		<ol class="breadcrumb">
            <li class="active"><i class="fa fa-dashboard"></i> 
            <a href="<?php echo base_url("mobil/");?>">
                Kendaraan Dinas Mobil
            </a>
            / Tambah Data Mobil
            </li>
        </ol>
    </div>
    <div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Tambah Data Mobil Operasional
				<div class="pull-right">
					<a href="<?=site_url('mobil') ?>" class="btn btn-warning btn-flat">
						<i class="fa fa-undo"></i> Kembali
					</a>
				</div> </h3>
			</div>
			<br>
			<div class="box-body">
				<div class="row">
				<div class="col-lg-12">
				<div class="panel panel-default">
						<div class="panel-body">
						<form action="" method="post">
							<div class="form-group <?=form_error('platnomer') ? 'has-error' : null?>">
								<label>Plat Nomer *</label>
								<input type="text" name="platnomer" class="form-control" value="<?=set_value('platnomer')?>">
								<span class="help-block"><?=form_error('platnomer')?></span>
							</div>
							<div class="form-group <?=form_error('nomermesin') ? 'has-error' : null?>">
								<label>Nomer Mesin *</label>
								<input type="text" name="nomermesin" class="form-control" value="<?=set_value('nomermesin')?>">
								<span class="help-block"><?=form_error('nomermesin')?></span>
							</div>
							<div class="form-group <?=form_error('nomerrangka') ? 'has-error' : null?>">
								<label>Nomer Rangka *</label>
								<input type="text" name="nomerrangka" class="form-control" value="<?=set_value('nomerrangka')?>">
								<span class="help-block"><?=form_error('nomerrangka')?></span>
							</div>
							<div class="form-group <?=form_error('sektor') ? 'has-error' : null?>">
								<label>Sektor *</label>
								<select name="sektor" class="form-control" value="<?=set_value('sektor')?>">
									<option value="">--Pilih Sektor--</option>
									<option value="Seksi Pengendali">Seksi Pengendali</option>
									<option value="Sektor 1">Sektor 1 </option>
									<option value="Sektor 2">Sektor 2 </option>
									<option value="Sektor 3">Sektor 3 </option>
									<option value="Sektor 4">Sektor 4 </option>
									<option value="Sektor 5">Sektor 5 </option>
									<option value="Sektor 6">Sektor 6 </option>
									<option value="Sektor 7">Sektor 7 </option>
									<option value="Sektor 8">Sektor 8 </option>
									<option value="Bengkel">Bengkel </option>
								</select>
								<span class="help-block"><?=form_error('sektor')?></span>
							</div>
							<div class="form-group">
								<label>Nomer Mobil </label>
								<input type="text" name="nomermobil" class="form-control" value="<?=set_value('nomermobil')?>">
							</div>
							<div class="form-group">
								<label>Tipe Mobil </label>
								<input type="text" name="tipemobil" class="form-control" value="<?=set_value('tipemobil')?>">
							</div>
							<div class="form-group">
								<label>Merk Mobil </label>
								<input type="text" name="merkmobil" class="form-control" value="<?=set_value('merkmobil')?>">
							</div>
							<div class="form-group <?=form_error('keterangan') ? 'has-error' : null?>">
								<label>Keterangan *</label>
								<select name="keterangan" class="form-control" value="<?=set_value('keterangan')?>">
									<option value="">--Pilih Keadaan Unit--</option>
									<option value="Baik">Baik</option>
									<option value="Rusak">Rusak</option>
									<option value="Service Bengkel">Service Bengkel</option>
									<option value="Service ATPM">Service ATPM</option>
								</select>
								<span class="help-block"><?=form_error('keterangan')?></span>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Simpan</button>
								<button type="reset" class="btn btn-flat">Reset</button>
							</div>
						</form>	
						<b>* Harus diisi</b>
					</div>
				</div>
			</div>
			</div>
			</div>
		</div>
    </div>
</div>
