<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/sidebar');?>
<div class="col-md-9" id="contentright">
  <h2 class="no-mar"><small>Input hutangpiutang</small></h2>

  <?php echo form_open('hutangpiutang/insert_hutangpiutang');?>


    id transaksi : <input type="text" name="kode_transaksi" value=""/>
    <p></p>
    nama vendor : <input type="text" name="nama_vendor" value=""/>
    <p></p>
    nama barang : <input type="text" name="nama_barang" value=""/>
    <p></p>
    harga satuan : <input type="text" name="harga_satuan" value=""/>
    <p></p>
    jumlah satuan : <input type="text" name="jumlah" value=""/>
    <p></p>
    tanggal transaksi : <input type="text" name="tanggal_transaksi" placeholder="yyyy-mm-dd"/>
    <p></p>
    total_bayar : <input type="text" name="total_bayar" value=""/>
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
        <th>Kode Transaksi</th>
        <th>Nama Vendor</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Tanggal</th>
        <th>Total</th>
        <th>Opsi Pilihan</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($vall_hut as $list) { ?>
      <tr>

          <td><?php echo $list->kode_transaksi;  ?></td>
          <td><?php echo $list->nama_vendor;  ?></td>
          <td><?php echo $list->nama_barang;  ?></td>
          <td><?php echo $list->harga_satuan;  ?></td>
          <td><?php echo $list->jumlah;  ?></td>
          <td><?php echo $list->tanggal_transaksi;  ?></td>
          <td><?php echo $list->total_bayar;  ?></td>
            <td><a href="<?php echo base_url()."hutangpiutang/show_hp_id/".$list->kode_transaksi; ?>">EDIT</a>|
                <a href="<?php echo base_url()."hutangpiutang/delete_ht/".$list->kode_transaksi; ?>">DELETE</a>
            </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  </div>
</div>
</div>



<?php $this->load->view('admin/footer');?>
