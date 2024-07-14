<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Barang</title>
  <link rel="stylesheet" href="<?php echo base_url();?>/asset/bootstrap/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>/asset/jquery/jquery-3.6.0.min.js"></script>
  <script src="<?php echo base_url();?>/asset/bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <style>
    /* Your custom styles here */
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-custom">
    <!-- Navbar content -->
  </nav>
  <div class="container">
    <div class="card shadow">
      <div class="card-header">
        <h1 class="card-title">Edit Barang</h1>
      </div>
      <div class="card-body">
        <form action="<?php echo site_url('barang/update/'.$barang->id); ?>" method="post">
          <div class="form-group">
            <label for="kode_barang">Kode Barang</label>
            <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="<?php echo $barang->kode_barang; ?>" required>
          </div>
          <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $barang->nama_barang; ?>" required>
          </div>
          <div class="form-group">
            <label for="harga_barang">Harga Barang</label>
            <input type="text" class="form-control" id="harga_barang" name="harga_barang" value="<?php echo $barang->harga_barang; ?>" required>
          </div>
          <div class="form-group">
            <label for="qty">Stok</label>
            <input type="number" class="form-control" id="qty" name="qty" value="<?php echo $barang->qty; ?>" required>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
          <a href="<?php echo site_url('barang/index'); ?>" class="btn btn-secondary">Kembali ke Menu</a>
        </form>
      </div>
    </div>
  </div>
  <!-- Your JavaScript files and scripts here -->
</body>
</html>
