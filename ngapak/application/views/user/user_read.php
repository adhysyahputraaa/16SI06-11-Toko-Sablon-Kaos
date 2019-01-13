<?php 
        $this->load->view('template/head');
        $this->load->view('template/header');
        $this->load->view('template/nav');

 ?>
        <h2 style="margin-top:0px">User Read</h2>
        <table class="table">
	    <tr><td>Nama User</td><td><?php echo $nama_user; ?></td></tr>
	    <tr><td>Username</td><td><?php echo $username; ?></td></tr>
	    <tr><td>Password</td><td><?php echo $password; ?></td></tr>
	    <tr><td>Alamat User</td><td><?php echo $alamat_user; ?></td></tr>
	    <tr><td>Nohp User</td><td><?php echo $nohp_user; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('user') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>

<?php     $this->load->view('template/footer'); ?>