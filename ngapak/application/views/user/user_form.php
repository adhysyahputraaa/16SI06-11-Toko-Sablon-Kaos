<?php 
        $this->load->view('template/head');
        $this->load->view('template/header');
        $this->load->view('template/nav');

 ?>
        <h2 style="margin-top:0px">User <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama User <?php echo form_error('nama_user') ?></label>
            <input type="text" class="form-control" name="nama_user" id="nama_user" placeholder="Nama User" value="<?php echo $nama_user; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Username <?php echo form_error('username') ?></label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Password <?php echo form_error('password') ?></label>
            <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat User <?php echo form_error('alamat_user') ?></label>
            <input type="text" class="form-control" name="alamat_user" id="alamat_user" placeholder="Alamat User" value="<?php echo $alamat_user; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nohp User <?php echo form_error('nohp_user') ?></label>
            <input type="text" class="form-control" name="nohp_user" id="nohp_user" placeholder="Nohp User" value="<?php echo $nohp_user; ?>" />
        </div>
	    <input type="hidden" name="id_user" value="<?php echo $id_user; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('user') ?>" class="btn btn-default">Cancel</a>
	</form>

<?php     $this->load->view('template/footer'); ?>