<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card"> 
            <div class="card-header"> 
                Detail Data Produk 
                <div class="card-body"> 
                    <p class="card-text"> Nama Produk: <?= $produk['nama_produk']; ?></p> <hr></hr>
                    <p class="card-text">Kode Produk: <?= $produk['kode_produk']; ?></p>  <hr></hr>
                    <p class="card-text">Harga Produk: <?= $produk['harga_produk']; ?></p> <hr></hr>
                    <p class="card-text">Jenis Produk: <?= $produk['jenis_produk']; ?></p> <hr></hr>
                    <a href="<?= base_url(); ?>produk" class="btn btn-primary">Kembali</a> 
                </div> 
            </div> 
            </div>
        </div>
    </div>
</div> 