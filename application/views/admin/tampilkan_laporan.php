<div class="container-fluid">
	<section class="section">
		<div class="section-header">
			<h4 align="center"><b>LAPORAN PENJUALAN</b></h1><br><br>
			</div>
		</section>

		<form method="POST" action="<?php echo base_url('admin/laporan') ?>">
			<div class="class-group col-sm-4">
				<label>Dari Tanggal</label> 
				<input type="date" name="dari" class="form-control">
				<?php echo form_error('dari','<span class="text-small text-danger">','</span>') ?>
			</div><br>

			<div class="class-group col-sm-4">
				<label>Sampai Tanggal</label>
				<input type="date" name="sampai" class="form-control">
				<?php echo form_error('dari','<span class="text-small text-danger">','</span>') ?>
			</div><br>	
			<div class="class-group col-sm-4">
				<button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i> Tampilkan Data</button>
			</div>
		</form><hr>

		<div class="btn-group">
			<a class="btn btn-sm btn-success" target="_blank" href="<?php echo base_url().'admin/laporan/print_laporan/?dari='.set_value('dari').'&sampai='.set_value('sampai') ?>"><i class="fas fa-print"></i> Print</a>
		</div>



		<table class="table table-bordered table-hover table-striped mt-4">

			<tr>
				<th>No</th>
				<th>No Faktur</th>
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
					<td><?php echo $psn->id_faktur ?></td>
					<td><?php echo $psn->tgl_pesan ?></td>
					<td><?php echo $psn->nama_brg ?></td>
					<td><?php echo number_format($subtotal,0,',','.') ?></td>
					<!-- <td><?php echo anchor('admin/faktur/detail/'.$psn->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td> -->
				</tr>

			<?php endforeach; ?>

			<tr>
				<td colspan="4" align="right"><b>Total Penjualan</b></td>
				<td align="right"><b>Rp. <?php echo number_format($total,0,',','.') ?></b></td>
			</tr>
			
		</table>

	</div>