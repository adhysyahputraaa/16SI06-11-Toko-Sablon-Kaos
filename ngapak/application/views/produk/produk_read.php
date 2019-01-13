<?php 
        $this->load->view('template/head');
        $this->load->view('template/header');
        $this->load->view('template/nav');

 ?>
        <h2 style="margin-top:0px">Produk Read</h2>
        <table class="table">
	    <tr><td>Nama Produk</td><td><?php echo $nama_produk; ?></td></tr>
	    <tr><td>Deskripsi</td><td><?php echo $deskripsi; ?></td></tr>
	    <tr><td>Harga Produk</td><td><?php echo $harga_produk; ?></td></tr>
	    <tr><td>Id Kategori</td><td><?php echo $id_kategori; ?></td></tr>
	    <tr><td>Gambar Produk</td><td><?php echo $gambar_produk; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('produk') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>

<?php     $this->load->view('template/footer'); ?>