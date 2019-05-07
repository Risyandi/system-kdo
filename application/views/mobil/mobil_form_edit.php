<div class="row">
    <div class="col-lg-12">
        <h2>Data Mobil</h2>
		<ol class="breadcrumb">
            <li class="active"><i class="fa fa-dashboard"></i> 
            <a href="<?php echo base_url("mobil/");?>">
                Kendaraan Dinas Mobil
            </a>
            / Edit Data Mobil
            </li>
        </ol>
    </div>
    <div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Edit Data Mobil Operasional
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
								<input type="hidden" name="idmobil" value="<?= $row->id_mobil ?>">
								<input type="text" name="platnomer" class="form-control" value="<?=$this->input->post('platnomer') ? $this->input->post('platnomer') : $row->plat_no ?>">
								<span class="help-block"><?=form_error('platnomer')?></span>
							</div>
							<div class="form-group <?=form_error('nomermesin') ? 'has-error' : null?>">
								<label>Nomer Mesin *</label>
								<input type="text" name="nomermesin" class="form-control" value="<?=$this->input->post('nomermesin') ? $this->input->post('nomermesin') : $row->no_mesin ?>">
								<span class="help-block"><?=form_error('nomermesin')?></span>
							</div>
							<div class="form-group <?=form_error('nomerrangka') ? 'has-error' : null?>">
								<label>Nomer Rangka *</label>
								<input type="text" name="nomerrangka" class="form-control" value="<?=$this->input->post('nomerrangka') ? $this->input->post('nomerrangka') : $row->no_rangka ?>">
								<span class="help-block"><?=form_error('nomerrangka')?></span>
							</div>
							<div class="form-group <?=form_error('sektor') ? 'has-error' : null?>">
								<label>Sektor *</label>
								<select name="sektor" class="form-control">
								<?php $sektor = $this->input->post('sektor') ? $this->input->post('sektor') : $row->sektor ?>
									<option value="">--Pilih Sektor--</option>
									<option value="Seksi Pengendali" <?php $sektor == "Seksi Pengendali" ? 'selected' : null ?>>Seksi Pengendali</option>
									<option value="Sektor 1"<?= $sektor == "Sektor 1" ? 'selected' : null ?>>Sektor 1 </option>
									<option value="Sektor 2"<?= $sektor == "Sektor 2" ? 'selected' : null ?>>Sektor 2 </option>
									<option value="Sektor 3"<?= $sektor == "Sektor 3" ? 'selected' : null ?>>Sektor 3 </option>
									<option value="Sektor 4"<?= $sektor == "Sektor 4" ? 'selected' : null ?>>Sektor 4 </option>
									<option value="Sektor 5"<?= $sektor == "Sektor 5" ? 'selected' : null ?>>Sektor 5 </option>
									<option value="Sektor 6"<?= $sektor == "Sektor 6" ? 'selected' : null ?>>Sektor 6 </option>
									<option value="Sektor 7"<?= $sektor == "Sektor 7" ? 'selected' : null ?>>Sektor 7 </option>
									<option value="Sektor 8"<?= $sektor == "Sektor 8" ? 'selected' : null ?>>Sektor 8 </option>
									<option value="Bengkel"<?= $sektor == "Bengkel" ? 'selected' : null ?>>Bengkel </option>
								</select>
								<span class="help-block"><?=form_error('sektor')?></span>
							</div>
							<div class="form-group">
								<label>Nomer Mobil </label>
								<input type="text" name="nomermobil" class="form-control" value="<?=$this->input->post('nomermobil') ? $this->input->post('nomermobil') : $row->no_mobil ?>">
							</div>
							<div class="form-group">
								<label>Tipe Mobil </label>
								<input type="text" name="tipemobil" class="form-control" value="<?=$this->input->post('tipemobil') ? $this->input->post('tipemobil') : $row->tipe_mobil ?>">
							</div>
							<div class="form-group">
								<label>Merk Mobil </label>
								<input type="text" name="merkmobil" class="form-control" value="<?=$this->input->post('merkmobil') ? $this->input->post('merkmobil') : $row->merk_mobil ?>">
							</div>
							<div class="form-group <?=form_error('keterangan') ? 'has-error' : null?>">
								<label>Keterangan *</label>
								<select name="keterangan" class="form-control">
								<?php $keterangan = $this->input->post('keterangan') ? $this->input->post('keterangan') : $row->keterangan ?>
									<option value="">--Pilih Keadaan Unit--</option>
									<option value="Baik" <?= $keterangan == "Baik" ? 'selected' : null ?>>Baik</option>
									<option value="Rusak" <?= $keterangan == "Rusak" ? 'selected' : null ?>>Rusak</option>
									<option value="Dalam Perbaikan Bengkel" <?= $keterangan == "Dalam Perbaikan Bengkel" ? 'selected' : null ?>>Dalam Perbaikan Bengkel</option>
									<option value="Dalam Perbaikan ATPM" <?= $keterangan == "Dalam Perbaikan ATPM" ? 'selected' : null ?>>Dalam Perbaikan ATPM</option>
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
