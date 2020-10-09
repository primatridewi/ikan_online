<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>
  <div class="form-group" align="right"> 
    <?php echo form_open('admin/data_barang/search') ?>
    <input type="text" name="keyword" placeholder="Search" >
    <button type="submit" class="btn btn-primary  btn-sm"><i  class="fa fa-search"></i></button>
  </div>

	<table class="table table-border">
		<tr>
			<th>NO</th>
			<th>NAMA PRODUK</th>
			<th>KETERANGAN</th>
			<th>KATEGORI</th>
			<th>HARGA(/Kg)</th>
			<th>STOK</th>
			<th colspan="3">AKSI</th>
		</tr>

		<?php 
		$no=1;
		foreach($barang as $brg) : ?>

      <tr>
       <td><?php echo $no++ ?></td>
       <td><?php echo $brg->nama_brg ?></td>
       <td><?php echo $brg->keterangan ?></td>
       <td><?php echo $brg->kategori ?></td>
       <td><?php echo $brg->harga ?></td>
       <td><?php echo $brg->stok ?></td>
      <!--  <td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td> -->
       <td><?php echo anchor('admin/data_barang/edit/' .$brg->id_brg, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
       <td><?php echo anchor('admin/data_barang/hapus/' .$brg->id_brg, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
     </tr>

   <?php endforeach; ?>

 </table>
 <?php echo form_close() ?>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT PRODUK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_barang/tambah_aksi' ?>" method="post" enctype="multipart/form-data" >
        	
        	<div class="form-group">
        		<label>Nama Produk</label>
        		<input type="text" name="nama_brg" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Keterangan</label>
        		<input type="text" name="keterangan" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Kategori</label>
        		<select class="form-control" name="kategori">
              <option>Ikan Laut</option>
              <option>Ikan Tawar</option>
              <option>Ikan Asin</option>
              <option>Udang</option>
              <option>Kepiting</option>
              <option>Cumi-cumi</option> 
            </select>
          </div>

          <div class="form-group">
            <label>Harga(/Kg)</label>
            <input type="text" name="harga" class="form-control">
          </div>

          <div class="form-group">
            <label>Stok</label>
            <input type="text" name="stok" class="form-control">
          </div>

          <div class="form-group">
            <label>Gambar Produk</label>
            <input type="file" name="gambar" class="form-control">
          </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>

      </form>

    </div>
  </div>
</div>