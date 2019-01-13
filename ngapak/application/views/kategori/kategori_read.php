<?php 
        $this->load->view('template/head');
        $this->load->view('template/header');
        $this->load->view('template/nav');

 ?>
        <h2 style="margin-top:0px">Kategori Read</h2>
        <table class="table">
	    <tr><td>Nama Kategori</td><td><?php echo $nama_kategori; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('kategori') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>

<?php     $this->load->view('template/footer'); ?>