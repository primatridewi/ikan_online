<table border=0 align="center" width="100%" >
	<tr align="center">
		<td colspan="4" width="100%"><font size="4"><b>
		TPI AIR BANGIS</b> </font><br>
		Jl. Koto Jambu, Aia Bangih<br> 
		<font size="2">Telp.085766144717</font>
	</td>
</tr>
<tr align="center">
	<td colspan="3">=============================================================================</td>
</tr>
</table><br>

<!-- <table>
	<?php foreach($pesanan as $psn) : ?>
	<tr>
		<td>Pemesan</td>
		<td>:</td>
		<td><?php echo $psn->nama ?></td>
	</tr>
	
	<?php endforeach; ?>
</table> -->

<table align="center" class="table table-bordered" id="dataTable" width="100%" border=1 cellspacing="0">

	<tr>
		<th>ID PRODUK</th>
		<th>NAMA PRODUK</th>
		<th>JUMLAH PESANAN</th>
		<th>HARGA/KG</th>
		<th>SUB-TOTAL</th>
	</tr>

	<?php 
	$total = 0;
	foreach ($pesanan as $psn) :
		$subtotal = $psn->jumlah * $psn->harga;
		$total += $subtotal;
		?>
		<tr align="center">

			<td><?php echo $psn->id_brg ?></td>
			<td><?php echo $psn->nama_brg ?></td>
			<td><?php echo $psn->jumlah ?></td>
			<td><?php echo number_format($psn->harga,0,',','.') ?></td>
			<td><?php echo number_format($subtotal,0,',','.') ?></td>
		</tr>

	<?php endforeach; ?>

	<tr>
		<td colspan="4" align="right"><b>Total Pembayaran</b></td>
		<td align="right"><b>Rp. <?php echo number_format($total,0,',','.') ?></b></td>
	</tr>

</table>

<script type="text/javascript">
	window.print();
</script>

