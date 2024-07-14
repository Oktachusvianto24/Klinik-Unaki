<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kartu Stok - <?php echo $barang->nama_barang; ?></title>
  <link rel="stylesheet" href="<?php echo base_url();?>/asset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .navbar-brand img {
      height: 50px;
      margin-right: 10px;
    }
    .navbar-custom {
      background-color: #343a40;
      color: #fff;
      padding: 10px 0;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }
    .navbar-custom .navbar-brand, 
    .navbar-custom .nav-link {
      color: #fff;
      font-size: 18px;
    }
    .navbar-custom .nav-link:hover {
      color: #f8f9fa;
      text-decoration: underline;
    }
    .btn-logout {
      background-color: #dc3545;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 10px 20px;
      font-size: 16px;
      font-weight: bold;
      transition: background-color 0.3s, box-shadow 0.3s;
    }
    .btn-logout:hover {
      background-color: #c82333;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .card-header {
      background-color: #007bff;
      color: #fff;
    }
    .card-title {
      font-size: 24px;
      margin: 0;
    }
    .btn-custom {
      font-size: 14px;
      padding: 8px 12px;
      margin-left: 5px;
    }
    .btn-custom-primary {
      background-color: #007bff;
      border-color: #007bff;
      color: #fff;
    }
    .btn-custom-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
    .btn-custom-secondary {
      background-color: #28a745;
      border-color: #28a745;
      color: #fff;
    }
    .btn-custom-secondary:hover {
      background-color: #218838;
      border-color: #218838;
    }
    .btn-custom-outline {
      border: 2px solid #343a40;
      color: #343a40;
      padding: 6px 12px;
      font-size: 14px;
    }
    .btn-custom-outline:hover {
      background-color: #343a40;
      color: #fff;
    }
    .table thead th {
      background-color: #343a40;
      color: #fff;
    }
    .table tbody tr:nth-child(even) {
      background-color: #f8f9fa;
    }
    .table tbody tr:hover {
      background-color: #e9ecef;
    }
    .pagination {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-custom">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo site_url('Home'); ?>">
      <img src="<?php echo base_url();?>/asset/img/logo1.png" alt="Logo">
      <span style="font-size: 20px;">Klinik Universitas AKI</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('Barang'); ?>">Stock Barang</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-logout" href="<?php echo site_url('auth/logout'); ?>">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5">
  <div class="card shadow">
    <div class="card-header">
      <h1 class="card-title">Kartu Stok <?php echo $barang->nama_barang; ?></h1>
    </div>
    <div class="card-body">
      <p><strong>Kode Barang:</strong> <?php echo $barang->kode_barang; ?></p>
      <p><strong>Nama Barang:</strong> <?php echo $barang->nama_barang; ?></p>

      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header bg-success text-white">
              <h3 class="card-title">Barang Masuk</h3>
            </div>
            <div class="card-body">
              <form action="<?php echo site_url('barang/masuk/'.$barang->id); ?>" method="post">
                <div class="form-group">
                  <label for="qty_masuk">Qty Masuk</label>
                  <input type="number" class="form-control" id="qty_masuk" name="qty" required>
                </div>
                <button type="submit" class="btn btn-success">Masukkan</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header bg-danger text-white">
              <h3 class="card-title">Barang Keluar</h3>
            </div>
            <div class="card-body">
              <form action="<?php echo site_url('barang/keluar/'.$barang->id); ?>" method="post">
                <div class="form-group">
                  <label for="qty_keluar">Qty Keluar</label>
                  <input type="number" class="form-control" id="qty_keluar" name="qty" required>
                </div>
                <button type="submit" class="btn btn-danger">Keluarkan</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <?php if ($this->session->flashdata('success')): ?>
      <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
      </div>
      <?php endif; ?>

      <?php if ($this->session->flashdata('error')): ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $this->session->flashdata('error'); ?>
      </div>
      <?php endif; ?>

      <div class="table-responsive mt-4">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Tanggal</th>
              <th>Waktu</th>
              <th>Tipe Transaksi</th>
              <th>Qty</th>
              <th>Saldo</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($kartu_stok as $ks): ?>
            <tr>
              <td><?php echo $ks->tanggal; ?></td>
              <td><?php echo $ks->waktu; ?></td>
              <td><?php echo $ks->tipe_transaksi; ?></td>
              <td><?php echo $ks->qty; ?></td>
              <td><?php echo $ks->saldo; ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <!-- Pagination links -->
      <div class="pagination">
        <?php echo $pagination; ?>
      </div>

      <br><br>
      <a href="<?php echo site_url('barang/index'); ?>" class="btn btn-secondary">Kembali ke Menu</a>
    </div>
  </div>
</div>

<script src="<?php echo base_url();?>/asset/jquery/jquery-3.6.0.min.js"></script>
<script src="<?php echo base_url();?>/asset/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
