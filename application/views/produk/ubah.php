<div class="container"> 
 
<div class="row mt-3"> 
    <div class="col-md-6"> 
 
    <div class="card"> 
                <div class="card-header"> 
                    Form Ubah Data Produk
                    </div> 
                        <div class="card-body"> 
                            
                        </div> 
                            <form action="" method="post"> 
                                <div class="form-group"> 
                                    <label for="nama produk">Nama Produk</label> 
                                    <input type="text" name="nama produk" class="form-control" id="nama produk"> 
                                    <small class="form-text text-danger"><?= form_error('nama produk'); ?></small>
                                </div>  
                                <div class="form-group"> 
                                    <label for="kode produk">Kode Produk</label> 
                                    <input type="text" name="kode produk" class="form-control" id="kode produk"> 
                                    <small class="form-text text-danger"><?= form_error('kode produk'); ?></small>
                                </div> 
                                <div class="form-group"> 
                                    <label for="harga produk">Harga Produk</label> 
                                    <input type="text" name="harga produk" class="form-control" id="harga produk"> 
                                    <small class="form-text text-danger"><?= form_error('harga produk'); ?></small>
                                </div> 
                                <div class="form-group">
                            <label for="jenis Produk">Jenis Produk</label>
                            <select class="form-control" id="jenis Produk"
                            name="jenis Produk">
                            <?php foreach( $jenis as $j ) : ?>
                                <?php if( $j == $produk['jenis Produk'] ) : ?>
                                    <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                <?php else : ?>
                                    <option value="<?= $j; ?>"><?= $j; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>

                            </select>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
                </div>

         
      
 
    </div> 
</div> 
 
</div>

