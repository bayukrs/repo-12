<div class="content">
		<div class="content-wrapper">
			<section class="content-header">
		      <div class="container-fluid">
		        <div class="row mb-2">
		          <div class="col-sm-6">
		            <h1>Edit Kategori</h1>
		          </div>
		          <div class="col-sm-6">
		            <ol class="breadcrumb float-sm-right">
		              <li class="breadcrumb-item"><a href="#">Home</a></li>
		              <li class="breadcrumb-item active">Edit Kategori</li>
		            </ol>
		          </div>
		        </div>
		      </div><!-- /.container-fluid -->
		    </section>

		    <section class="content">
		      <div class="container-fluid">
		        <div class="row">
		          <!-- left column -->
		          <div class="col-md-6">
		              <form action="<?php echo base_url()?>admin/kategori/update" method="post" enctype="multipart/form-data">
		              	<?php foreach($kategori as $u){ ?>
		                <div class="form-group">
		                    <label>ID Kategori</label>
		                      <input type="text" name="id_kategori" value="<?php echo $u->id_kategori;?>" class="form-control" placeholder="Enter">
		                </div>
		                <div class="form-group">
		                    <label>Nama Kategori</label>
		                      <input type="text" name="nama_kategori" value="<?php echo $u->nama_kategori;?>" class="form-control" placeholder="Enter">
		                </div>
		                <?php   }; ?>
		                <input type="submit" value="Tambah" class="btn btn-primary btn-block">
		              <?php echo form_close() ?>  
		              </form>
		            </div>
		          </div>
		      </div>
		    </section>
		</div>
	</div>
	</div>