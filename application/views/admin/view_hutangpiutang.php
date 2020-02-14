<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/sidebar');?>
<div class="col-md-9" id="contentright">
  <h2 class="no-mar"><small>View hutangpiutang</small></h2>
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
