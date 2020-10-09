<h3 style="text-align: center"><b>LAPORAN PENJUALAN IKAN</b></h3>
<h3 style="text-align: center"><b>TPI AIR BANGIS</b></h3><br><br>
<table>
	<tr>
		<td>Dari Tanggal</td>
		<td>:</td>
		<td><?php echo date('d-M-Y',strtotime($_GET['dari'])); ?></td>
	</tr>
	<tr>
		<td>Sampai Tanggal</td>
		<td>:</td>
		<td><?php echo date('d-M-Y',strtotime($_GET['sampai'])); ?></td>
	</tr>
</table>

<table class="table table-bordered table-striped mt-4">

		<tr>
			<th>No</th>
			<!-- <th>No Faktur</th> -->
			<th>Tanggal Pembelian</th>
			<th>Nama Produk</th>
			<th>Harga</th>
			<!-- <th>Aksi</th> -->

		</tr>

		<?php 
		$total = 0;
		$no=1;
		foreach ($laporan as $psn) :
			$subtotal = $psn->jumlah * $psn->harga;
			$total += $subtotal;
		 ?>
		 <tr>
		 	<td><?php echo $no++ ?></td>
		 	<!-- <td><?php echo $psn->id_faktur ?></td> -->
		 	<td><?php echo $psn->tgl_pesan ?></td>
		 	<td><?php echo $psn->nama_brg ?></td>
		 	<td><?php echo number_format($subtotal,0,',','.') ?></td>
		 	<!-- <td><?php echo anchor('admin/faktur/detail/'.$psn->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td> -->
		 </tr>

		<?php endforeach; ?>

		<tr>
			<td colspan="3" align="right"><b>Total Penjualan</b></td>
			<td align="right"><b>Rp. <?php echo number_format($total,0,',','.') ?></b></td>
		</tr>
		
	</table>

	<script type="text/javascript">
		window.print();
	</script>