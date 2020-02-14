<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/sidebar');?>
<div class="col-md-9" id="contentright">
  <h2 class="no-mar"><small>Barang</small></h2>

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
