			<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg></a></li>
				<li class="active">Update</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Update</h1>
			</div>
		</div><!--/.row-->
				
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg> Update Data</div>
					<div class="panel-body">
					<?php foreach ($asetbang as $a) { ?>
						<form class="form-horizontal" action="<?php  echo base_url(). 'admin_petugas/update_aset_b'?>" method="post">
							<fieldset>
							<!-- Id input-->
								<div class="form-group">
									<label class="col-md-3 control-label">NPSN</label>
									<div class="col-md-9">
									<input name="npsn" type="text" class="form-control" value="<?php echo $a->npsn; ?>">
									</div>
								</div>

								<!-- username input-->
								<div class="form-group">
									<label class="col-md-3 control-label">Nama Bangunan</label>
									<div class="col-md-9">
									<input name="nama_bangunan" type="text" class="form-control" value="<?php echo $a->nama_bangunan; ?>">
									</div>
								</div>

								<!-- email input-->
								<div class="form-group">
									<label class="col-md-3 control-label">Kode Bangunan</label>
									<div class="col-md-9">
									<input name="kode_bangunan" type="text" class="form-control" value="<?php echo $a->kode_bangunan; ?>">
									</div>
								</div>

								<!-- password input-->
								<div class="form-group">
									<label class="col-md-3 control-label">Register Bangunan</label>
									<div class="col-md-9">
									<input name="register_bangunan" type="text" class="form-control" value="<?php echo $a->register_bangunan; ?>">
									</div>
								</div>

								<!-- nama input-->
								<div class="form-group">
									<label class="col-md-3 control-label">Kondisi Bangunan</label>
									<div class="col-md-9">
									<input name="kondisi_bangunan" type="text" class="form-control" value="<?php echo $a->kondisi_bangunan; ?>">
									</div>
								</div>


								<!-- Foto input-->
								<div class="form-group">
									<label class="col-md-3 control-label">Luas Lantai</label>
									<div class="col-md-9">
									<input name="luas_lantai" type="text" class="form-control" value="<?php echo $a->luas_lantai; ?>">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Lokasi</label>
									<div class="col-md-9">
									<input name="lokasi" type="text" class="form-control" value="<?php echo $a->lokasi; ?>">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Tahun Pembangunan</label>
									<div class="col-md-9">
									<input name="tahun_pembangunan" type="text" class="form-control" value="<?php echo $a->tahun_pembangunan; ?>">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Luas Bangunan</label>
									<div class="col-md-9">
									<input name="luas_bangunan" type="text" class="form-control" value="<?php echo $a->luas_bangunan; ?>">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Biaya Pembangunan</label>
									<div class="col-md-9">
									<input name="biaya_pembangunan" type="text" class="form-control" value="<?php echo $a->biaya_pembangunan; ?>">
									</div>
								</div>
							
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" class="btn btn-default btn-md pull-right" value="Simpan">Submit</button>
									</div>
								</div>
							</fieldset>
						</form>
						<?php } ?>
					</div>
				</div>
				</div>
	</div><!--/.main-->