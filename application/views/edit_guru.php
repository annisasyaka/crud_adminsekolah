<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg></a></li>
				<li class="active">Admin</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
						<div class="panel-body">
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
							<?php foreach ($aset as $s){?>
<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Tambah Data</div>
					<div class="panel-body">
						<form class="form-horizontal" action="<?php echo base_url(). 'admin/tambah_proses'; ?>" method="post">
							<fieldset>
								<!-- Npsn-->
								<div class="form-group">
									<label class="col-md-3 control-label">Npsn</label>
									<div class="col-md-9">
									<input name="npsn" type="text" class="form-control">
									</div>
								</div>

								<!-- Kepemilikan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Tahun Ajaran</label>
									<div class="col-md-9">
									<input name="tahun_ajaran" type="text" class="form-control">
									</div>
								</div>

								<!-- Atas Nama-->
								<div class="form-group">
									<label class="col-md-3 control-label">NBM</label>
									<div class="col-md-9">
									<input name="nbm" type="text" class="form-control">
									</div>
								</div>

								<!-- Status Tanah-->
								<div class="form-group">
									<label class="col-md-3 control-label">Nama Guru</label>
									<div class="col-md-9">
									<input name="nama_guru" type="text" class="form-control">
									</div>
								</div>

								<!-- Luas Tanah-->
								<div class="form-group">
									<label class="col-md-3 control-label">Bidang</label>
									<div class="col-md-9">
									<input name="bidang" type="text" class="form-control">
									</div>
								</div>

								<!-- No Sertifikat-->
								<div class="form-group">
									<label class="col-md-3 control-label">Nuptk</label>
									<div class="col-md-9">
									<input name="nuptk" type="text" class="form-control">
									</div>
								</div>

								<!-- Tahun Perolehan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Nip</label>
									<div class="col-md-9">
									<input name="nip" type="text" class="form-control">
									</div>
								</div>

								<!-- Asal Usul-->
								<div class="form-group">
									<label class="col-md-3 control-label">Tempat lahir</label>
									<div class="col-md-9">
									<input name="tempat_lahir" type="text" class="form-control">
									</div>
								</div>

								<!-- Letak-->
								<div class="form-group">
									<label class="col-md-3 control-label">Tanggal lahir</label>
									<div class="col-md-9">
									<input name="tgl_lahir" type="text" class="form-control">
									</div>
								</div>

								<!-- Peruntukan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Telepon</label>
									<div class="col-md-9">
									<input name="telepon" type="text" class="form-control">
									</div>
								</div>
							
								<!-- Peruntukan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Email</label>
									<div class="col-md-9">
									<input name="email" type="text" class="form-control">
									</div>
								</div>
							
								
								<!-- Peruntukan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Pangkat Golongan Ruang</label>
									<div class="col-md-9">
									<input name="pangkat_golruang" type="text" class="form-control">
									</div>
								</div>
							
								
								<!-- Peruntukan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Tanggal Pengangkatan</label>
									<div class="col-md-9">
									<input name="tgl_pengangkatan" type="text" class="form-control">
									</div>
								</div>
							
								
								<!-- Peruntukan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Sertifikasi Guru</label>
									<div class="col-md-9">
									<input name="sertifikasi_guru" type="text" class="form-control">
									</div>
								</div>
							
								
								<!-- Peruntukan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Tamat Sertifikat</label>
									<div class="col-md-9">
									<input name="tmt_sertifikasi" type="text" class="form-control">
									</div>
								</div>
							
								
								<!-- Peruntukan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Jenis kelamin</label>
									<div class="col-md-9">
									<input name="jk" type="text" class="form-control">
									</div>
								</div>
							
								<!-- Peruntukan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Status Pegawai</label>
									<div class="col-md-9">
									<input name="sts_pegawai" type="text" class="form-control">
									</div>
								</div>
							
								<!-- Peruntukan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Organisasi</label>
									<div class="col-md-9">
									<input name="organisasi" type="text" class="form-control">
									</div>
								</div>
							
								<!-- Peruntukan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Alamat</label>
									<div class="col-md-9">
									<input name="alamat" type="text" class="form-control">
									</div>
								</div>
							
								<!-- Peruntukan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Rt/Rw</label>
									<div class="col-md-9">
									<input name="rt-rw" type="text" class="form-control">
									</div>
								</div>
							
								<!-- Peruntukan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Kelurahan</label>
									<div class="col-md-9">
									<input name="kelurahan" type="text" class="form-control">
									</div>
								</div>
							
								
								<!-- Peruntukan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Kecamatan</label>
									<div class="col-md-9">
									<input name="kec" type="text" class="form-control">
									</div>
								</div>
							
								<!-- Peruntukan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Kabupaten</label>
									<div class="col-md-9">
									<input name="kab" type="text" class="form-control">
									</div>
								</div>
							
								<!-- Peruntukan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Pendidikan</label>
									<div class="col-md-9">
									<input name="pendidikan" type="text" class="form-control">
									</div>
								</div>
							
								<!-- Peruntukan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Jurusan</label>
									<div class="col-md-9">
									<input name="jurusan" type="text" class="form-control">
									</div>
								</div>
							
								<!-- Peruntukan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Universitas</label>
									<div class="col-md-9">
									<input name="univ" type="text" class="form-control">
									</div>
								</div>
							
								<!-- Peruntukan-->
								<div class="form-group">
									<label class="col-md-3 control-label">Tahun lulus</label>
									<div class="col-md-9">
									<input name="thn_lulus" type="text" class="form-control">
									</div>
								</div>
							
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" class="btn btn-default btn-md pull-right" value="Tambah">Submit</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
				</div>

	</div>	<!--/.main-->
	  