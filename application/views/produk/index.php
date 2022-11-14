<div class="container"> 
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');?>"></div> 
    <?php if( $this->session->flashdata('flash') ) : ?> 
    <div class="row mt-3"> 
        <div class="col-md-6"> 
            <div class="alert alert-success alert-dismissible fade show" role="alert"> 
                Data Produk <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>. 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                    <span aria-hidden="true">&times;</span> 
                </button> 
            </div> 
        </div> 
    </div> 

    <?php endif; ?> 
 
    <div class="row mt-3"> 
        <div class="col-md-6"> 
            <a href="<?= base_url(); ?>produk/tambah" class="btn btn-primary">Tambah Data Produk</a> 
        </div> 
    </div> 
 
    <div class="row mt-3"> 
        <div class="col-md-6"> 
            <form action="" method="post"> 
              <div class="input-group"> 
                <input type="text" class="form-control" placeholder="Cari Data produk..." name="keyword"> 
                  <div class="input-group-append"> 
                    <button class="btn btn-outline-primary" type="submit">Cari</button> 
                </div> 
            </div> 
        </div> 
    </div> 
  
  <div class="row-mt-3">  
     <div class="col-md-6">  
        <h3>Daftar Produk</h3>  
        <?php if (empty($produk) ) : ?> 
            <div class="alert alert-danger" role="alert"> 
            data produk tidak ditemukan. 
            </div> 
        <?php endif; ?>     
        <ul class="list-group">  
                <table  id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <td>Nama Produk</td>
                        <td>Kode Produk</td>
                        <td>Harga Produk</td>
                        <td>Jenis Produk</td>
                        
                    </tr>
        </thead>
        <tbody>
            <?php foreach( $produk as $prd ) : ?> 
                    <tr>
                        <td><?= $prd->nama_produk;?></td>
                        <td><?= $prd->kode_produk;?></td>
                        <td><?= $prd->harga_produk;?></td>
                        <td><?= $prd->jenis_produk;?></td>
                        <td>
                        <a href="<?= base_url(); ?>produk/hapus/<?= $prd->id; ?>" class="badge badge-danger float-right " onclick="retrun confirm('yakin?');">hapus</a> 
                        <a href="<?= base_url(); ?>produk/ubah/<?= $prd->id; ?>" class="badge badge-success float-right ">ubah</a> 
                        <a href="<?= base_url(); ?>produk/detail/<?= $prd->id; ?>" class="badge badge-primary float-right ">detail</a> 
                        </td>
                    </tr>
            <?php endforeach; ?> 
            
            </tbody>
            </table>
        </ul>  
     </div>  
  </div>  
  
</div>
<script>
    $(document).ready(function () {
    $('#example').DataTable();
});

</script>