<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Barang</title>
  <link rel="stylesheet" href="<?php echo base_url();?>/asset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <style>
    /* Your custom styles here */
  </style>
</head>
<body>
  <!-- Your navigation and header -->
  
  <div class="container">
    <div class="card shadow">
      <div class="card-header">
        <h1 class="card-title">Tambah Barang</h1>
      </div>
      <div class="card-body">
        <form action="<?php echo site_url('barang/simpan'); ?>" method="post">
          <div class="form-group">
            <label for="kode_barang">Kode Barang</label>
            <input type="text" class="form-control" id="kode_barang" name="kode_barang" required>
          </div>
          <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
          </div>
          <div class="form-group">
            <label for="harga_barang">Harga Barang</label>
            <input type="text" class="form-control" id="harga_barang" name="harga_barang" required>
          </div>
          <div class="form-group">
            <label for="qty">Stok</label>
            <input type="number" class="form-control" id="qty" name="qty" required>
          </div>
          <!-- Display total dynamically -->
          <div class="form-group">
            <label for="total">Total</label>
            <input type="text" class="form-control" id="total" name="total" readonly>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
          <a href="<?php echo site_url('barang/index'); ?>" class="btn btn-secondary">Kembali ke Menu</a>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.min.js"></script>
  
  <script>
    // Example JavaScript to calculate total based on inputs
    $(document).ready(function() {
      // Assuming price and quantity are used to calculate total
      $('#harga_barang, #qty').on('input', function() {
        var harga = parseFloat($('#harga_barang').val()) || 0;
        var qty = parseInt($('#qty').val()) || 0;
        var total = harga * qty;
        $('#total').val(total.toFixed(2)); // Update total field
      });
    });
  </script>
</body>
</html>
