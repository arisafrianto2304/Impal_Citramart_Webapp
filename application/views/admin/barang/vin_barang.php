<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/sidebar');?>
<div class="col-md-9" id="contentright">
  <h2 class="no-mar"><small>Input Data Barang</small></h2>

  <?php echo form_open('barang/insert_barang');?>


    Kode Barang : <input type="text" name="kode_barang" value=""/>
    <p></p>
    Nama Barang : <input type="text" name="nama_barang" value=""/>
    <p></p>
    Stock Barang : <input type="text" name="stock_barang" value=""/>
    <p></p>
    Tanggal Pembelian : <input type="text" name="tanggal_pembelian" value="" placeholder="yyyy-mm-dd"/>
    <p></p>
    Jumlah Barang : <input type="text" name="jumlah_barang" value=""/>
    <p></p>
    Total : <input type="text" name="total_pembelian" />
    <p></p>


    <input type="submit" name="btnSubmit" value="Submit" />
    <?php echo form_close();?>
  </p>

  <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Stock Barang</th>
        <th>Tanggal</th>
        <th>Jumlah</th>
        <th>Total</th>
        <th>Opsi Pilihan</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($vall_barang as $list) { ?>
      <tr>

          <td><?php echo $list->kode_barang;  ?></td>
          <td><?php echo $list->nama_barang;  ?></td>
          <td><?php echo $list->stock_barang;  ?></td>
          <td><?php echo $list->tanggal_pembelian;  ?></td>
          <td><?php echo $list->jumlah_barang;  ?></td>
          <td><?php echo $list->total_pembelian;  ?></td>
            <td><a href="<?php echo base_url()."barang/show_barang_id/".$list->kode_barang; ?>">EDIT</a>|
                <a href="<?php echo base_url()."barang/delete_barang/".$list->kode_barang; ?>">DELETE</a>
            </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  </div>
</div>
</div>

<?php $this->load->view('admin/footer');?>
