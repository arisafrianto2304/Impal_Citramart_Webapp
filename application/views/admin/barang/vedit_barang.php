<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/sidebar');?>
<div class="col-md-9" id="contentright">
  <h2 class="no-mar"><small>Edit Barang</small></h2>

  <?php foreach ($show_edit as $list) { ?>
  <?php echo form_open('barang/update_barang');?>


    <input type="hidden"  name="kode_barang" value="<?php echo $list->kode_barang; ?>"/>
    Nama Barang : <input type="text" name="nama_barang" value="<?php echo $list->nama_barang; ?>"/>
    <p></p>
    Stock Barang : <input type="text" name="stock_barang" value="<?php echo $list->stock_barang; ?>"/>
    <p></p>
    Tanggal : <input type="text" name="tanggal_pembelian" value="<?php echo $list->tanggal_pembelian; ?>"/>
    <p></p>
    Jumlah Barang : <input type="text" name="jumlah_barang" value="<?php echo $list->jumlah_barang; ?>" />
    <p></p>
    Total : <input type="text" name="total_pembelian" value="<?php echo $list->total_pembelian; ?>"/>
    <p></p>
    <input type="submit" name="editSubmitbarang" value="Update" />
    <?php echo form_close();?>
  <?php } ?>
  </p>
</div>
</div>



<?php $this->load->view('admin/footer');?>
