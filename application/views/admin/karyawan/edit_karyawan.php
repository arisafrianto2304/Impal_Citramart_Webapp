<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/sidebar');?>
<div class="col-md-9" id="contentright">
  <h2 class="no-mar"><small>Edit Karyawan</small></h2>

  <?php foreach ($show_edit as $list) { ?>
  <?php echo form_open('karyawan/update_karyawan');?>


    <input type="hidden" name="kode_karyawan" value="<?php echo $list->kode_karyawan; ?>"/>
    <p></p>
    Username : <input type="text" name="username" value="<?php echo $list->username; ?>"/>
    <p></p>
    Password : <input type="password" name="password" value="<?php echo $list->password; ?>"/>
    <p></p>
    Nama : <input type="text" name="nama" value="<?php echo $list->nama; ?>"/>
    <p></p>
    Role : <input type="text" name="bagian" value="<?php echo $list->bagian; ?>"/>
    <p></p>
    Jenis Kelamin : <input type="text" name="jenis_kelamin" value="<?php echo $list->jenis_kelamin; ?>" />
    <p></p>
    Alamat : <input type="text" name="alamat" value="<?php echo $list->alamat; ?>"/>
    <p></p>
    Nomor Telepon : <input type="text" name="no_telepon" value="<?php echo $list->no_telepon; ?>"/>
    <p></p>


    <input type="submit" name="editkaryawanSubmit" value="Submit" />
    <?php echo form_close();?>
    <?php } ?>
  </p>


</div>
</div>



<?php $this->load->view('admin/footer');?>
