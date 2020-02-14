<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/sidebar');?>
<div class="col-md-9" id="contentright">
  <h2 class="no-mar"><small>Input Data Karyawan</small></h2>

  <?php echo form_open('karyawan/insert_karyawan');?>


    Kode Karyawan : <input type="text" name="kode_karyawan" value=""/>
    <p></p>
    Username : <input type="text" name="username" value=""/>
    <p></p>
    Password : <input type="password" name="password" value=""/>
    <p></p>
    Nama : <input type="text" name="nama" value=""/>
    <p></p>
    Role : <input type="text" name="bagian" value=""/>
    <p></p>
    Jenis Kelamin : <input type="text" name="jenis_kelamin" />
    <p></p>
    Alamat : <input type="text" name="alamat" value=""/>
    <p></p>
    Nomor Telepon : <input type="text" name="no_telepon" value=""/>
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


    <input type="submit" name="karyawanSubmit" value="Submit" />
    <?php echo form_close();?>
  </p>

  <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Username</th>
        <th>Nama</th>
        <th>Role</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Nomor Telepon</th>
        <th>Opsi Pilihan</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($vall_karyawan as $list) { ?>
      <tr>

          <td><?php echo $list->username;  ?></td>
          <td><?php echo $list->nama;  ?></td>
          <td><?php echo $list->bagian;  ?></td>
          <td><?php echo $list->jenis_kelamin;  ?></td>
          <td><?php echo $list->alamat;  ?></td>
          <td><?php echo $list->no_telepon;  ?></td>
            <td><a href="<?php echo base_url()."karyawan/show_karyawan_id/".$list->kode_karyawan; ?>">EDIT</a>|
                <a href="<?php echo base_url()."karyawan/delete_karyawan/".$list->kode_karyawan; ?>">DELETE</a>
            </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  </div>
</div>
</div>



<?php $this->load->view('admin/footer');?>
