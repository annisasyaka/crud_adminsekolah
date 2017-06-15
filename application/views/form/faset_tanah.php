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
					<?php foreach ($asettan as $a) { ?>
						<form class="form-horizontal" action="<?php  echo base_url(). 'admin_petugas/update_aset_t'?>" method="post">
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
									<label class="col-md-3 control-label">No Persil</label>
									<div class="col-md-9">
									<input name="no_persil" type="text" class="form-control" value="<?php echo $a->no_persil; ?>">
									</div>
								</div>

								<!-- email input-->
								<div class="form-group">
									<label class="col-md-3 control-label">Kepemilikan</label>
									<div class="col-md-9">
									<input name="kepemilikan" type="text" class="form-control" value="<?php echo $a->kepemilikan; ?>">
									</div>
								</div>

								<!-- password input-->
								<div class="form-group">
									<label class="col-md-3 control-label">Atas Nama Sertifikat</label>
									<div class="col-md-9">
									<input name="atasnama_sertifikat" type="text" class="form-control" value="<?php echo $a->atasnama_sertifikat; ?>">
									</div>
								</div>

								<!-- nama input-->
								<div class="form-group">
									<label class="col-md-3 control-label">Status Tanah</label>
									<div class="col-md-9">
									<input name="status_tanah" type="text" class="form-control" value="<?php echo $a->status_tanah; ?>">
									</div>
								</div>


								<!-- Foto input-->
								<div class="form-group">
									<label class="col-md-3 control-label">Luas Tanah</label>
									<div class="col-md-9">
									<input name="luas_tanah" type="text" class="form-control" value="<?php echo $a->luas_tanah; ?>">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">No Sertifikat</label>
									<div class="col-md-9">
									<input name="no_sertifikat" type="text" class="form-control" value="<?php echo $a->no_sertifikat; ?>">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Tgl Sertifikat</label>
									<div class="col-md-9">
									<input name="tgl_sertifikat" type="text" class="form-control" value="<?php echo $a->tgl_sertifikat; ?>">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Thn Perolehan</label>
									<div class="col-md-9">
									<input name="thn_perolehan" type="text" class="form-control" value="<?php echo $a->thn_perolehan; ?>">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Harga Perolehan</label>
									<div class="col-md-9">
									<input name="harga_perolehan" type="text" class="form-control" value="<?php echo $a->harga_perolehan; ?>">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Asal Usul</label>
									<div class="col-md-9">
									<input name="asal_usul" type="text" class="form-control" value="<?php echo $a->asal_usul; ?>">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Letak</label>
									<div class="col-md-9">
									<input name="letak" type="text" class="form-control" value="<?php echo $a->letak; ?>">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Peruntukan</label>
									<div class="col-md-9">
									<input name="peruntukan" type="text" class="form-control" value="<?php echo $a->peruntukan; ?>">
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