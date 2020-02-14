<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/sidebar');?>
<div class="col-md-9" id="contentright">
  <h2 class="no-mar"><small>Edit hutangpiutang</small></h2>

  <?php foreach ($show_edit as $list) { ?>
  <?php echo form_open('hutangpiutang/update_hp');?>


    <input type="hidden" name="kode_transaksi" value="<?php echo $list->kode_transaksi; ?>"/>
    nama vendor : <input type="text" name="nama_vendor" value="<?php echo $list->nama_vendor; ?>"/>
    <p></p>
    nama barang : <input type="text" name="nama_barang" value="<?php echo $list->nama_barang; ?>"/>
    <p></p>
    harga satuan : <input type="text" name="harga_satuan" value="<?php echo $list->harga_satuan; ?>"/>
    <p></p>
    jumlah satuan : <input type="text" name="jumlah" value="<?php echo $list->jumlah; ?>"/>
    <p></p>
    tanggal transaksi : <input type="text" name="tanggal_transaksi" value="<?php echo $list->tanggal_transaksi; ?>" />
    <p></p>
    total_bayar : <input type="text" name="total_bayar" value="<?php echo $list->total_bayar; ?>"/>
    <p></p>
    <input type="submit" name="editSubmithp" value="Update" />
    <?php echo form_close();?>
  <?php } ?>
  </p>
</div>
</div>



<?php $this->load->view('admin/footer');?>
