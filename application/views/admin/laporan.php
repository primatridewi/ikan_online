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
	</form>

	<!-- <div class="card-body">
           
            <div class="table-responsive">
             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead>
                 <tr>
                  <th >No.</th>
                  <th >No Faktur</th>
                  <th>Pemesan</th>
                  <th>Tanggal Pembelian</th>
                  <th>Total Pembelian</th>
                  <th>Detail</th>
                </tr>
              </thead>
   
          </table>
        </div>
      </div> -->
</div>