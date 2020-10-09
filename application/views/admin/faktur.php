<div class="container-fluid" align="center">
	<h3><b>Faktur Pemesanan Produk</b></h3><br><br>

	<div class="form-group" align="right"> 
		<?php echo form_open('admin/faktur/search') ?>
		<input type="text" name="keyword" placeholder="Search" >
		<button type="submit" class="btn btn-primary  btn-sm"><i  class="fa fa-search"></i></button>
	</div>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<!-- <th>Id Faktur</th> -->
			<th>No</th>
			<th>Nama Pemesan</th>
			<th>Alamat Pengiriman</th>
			<th>No.Telp</th>
			<th>Nama Rekening</th>
			<th>Tanggal Pemesanan</th>
			<th>Batas Pembayaran</th>
			<th colspan="2">Aksi</th>
		</tr>
		
		<?php 
		$no=1;
		foreach ($faktur as $ftr) : ?>
		<tr>
			<!-- <td><?php echo $ftr->id ?></td> -->
			<td><?php echo $no++ ?></td>
			<td><?php echo $ftr->nama ?></td>
			<td><?php echo $ftr->alamat ?></td>
			<td><?php echo $ftr->no_telp ?></td>
			<td><?php echo $ftr->namarek ?></td>
			<td><?php echo $ftr->tgl_pesan ?></td>
			<td><?php echo $ftr->batas_bayar ?></td>
			<td><?php echo anchor('admin/faktur/detail/'.$ftr->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
			<td><?php echo anchor('admin/faktur/hapus/' .$ftr->id, '<div class="btn btn-sm btn-danger">Hapus</div>') ?></td>
		</tr>


	<?php endforeach; ?>
	</table>
	<?php echo form_close(); ?>
</div>