<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/sidebar');?>
<div class="col-md-9" id="contentright">
  <h2 class="no-mar"><small>Edit Admin</small></h2>

  <?php foreach ($show_edit as $list) { ?>
  <?php echo form_open('admin/update_admin');?>

    Username : <input type="text" name="username"  value="<?php echo $list->username; ?>"/>
    <p></p>
    <input type="hidden" name="admin_id" value="<?php echo $list->admin_id; ?>"/>
    <p></p>
    Password : <input type="password" name="password" value="<?php echo $list->password; ?>"/>
    <p></p>

  <!--
    id transaksi : <input type="text" name="no" value=""/>
    <p></p>
    nama vendor : <input type="test" name="id_user" value=""/>
    <p></p>
    nama vendor : <input type="test" name="username" value=""/>
    <p></p>
    nama vendor : <input type="test" name="password" value=""/>
    <p></p>
    nama vendor : <input type="test" name="nama" value=""/>
    <p></p>
    nama vendor : <input type="test" name="role" value=""/>
    <p></p>
    nama vendor : <input type="test" name="tgl_lahir" placeholder="yyyyy-mm-dd"/>
    <p></p>
    nama vendor : <input type="test" name="alamat" value=""/>
    <p></p> -->


    <input type="submit" name="btnSubmit" value="Submit" />
    <?php echo form_close();?>
  <?php } ?>
  </p>


</div>
</div>



<?php $this->load->view('admin/footer');?>
