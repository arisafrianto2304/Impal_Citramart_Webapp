<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/sidebar');?>
<div class="col-md-9" id="contentright">
  <h2 class="no-mar"><small>Input Admin</small></h2>

  <?php echo form_open('admin/insert_admin');?>


    ID Admin : <input type="text" name="admin_id" value=""/>
    <p></p>
    Username : <input type="text" name="username" value=""/>
    <p></p>
    Password : <input type="password" name="password" value=""/>
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
  </p>

  <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID Admin</th>
        <th>Username</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($vall_admin as $list) { ?>
      <tr>

          <td><?php echo $list->admin_id;  ?></td>
          <td><?php echo $list->username;  ?></td>
            <td><a href="<?php echo base_url()."admin/show_admin_id/".$list->username; ?>">EDIT</a>|
                <a href="<?php echo base_url()."admin/delete_admin/".$list->username; ?>">DELETE</a>
            </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  </div>
</div>
</div>



<?php $this->load->view('admin/footer');?>
