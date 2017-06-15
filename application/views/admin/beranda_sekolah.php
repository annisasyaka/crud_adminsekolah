<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg></a></li>
				<li class="active">Beranda</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Info Sekolah</h1>
			</div>
		</div><!--/.row-->
		

<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Data Sekolah</div>
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th>Npsn</th>
						        <th>Web</th>
						        <th>Akreditasi</th>
						        <th>Telepon</th>
						        <th>Alamat</th>
					
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach ($prof as $p) {
						    ?>
						    <tr>
						    	<td align="left"><?php echo $p->npsn ?></td>
						    	<td align="left"><?php echo $p->web ?></td>
						    	<td align="left"><?php echo $p->akreditasi ?></td>
						    	<td align="left"><?php echo $p->telepon ?></td>
						    	<td align="left"><?php echo $p->alamat ?></td>

						    </tr>
						    <?php } ?>
                            </tbody>
						</table>
					</div>
				</div>
			</div>



			
		</div><!--/.row-->
	</div>	<!--/.main-->