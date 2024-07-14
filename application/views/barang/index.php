<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kartu Stok Barang</title>
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
    .card-header {
      background-color: #007bff;
      color: #fff;
    }
    .card-title {
      font-size: 24px;
      margin: 0;
    }
    .table thead th {
      background-color: #343a40;
      color: #fff;
      border-color: #343a40;
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
            <a class="btn btn-custom btn-custom-outline" href="<?php echo site_url('auth/logout'); ?>">
              <i class="fas fa-sign-out-alt"></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container mt-4">
    <div class="card shadow">
      <div class="card-header">
        <h1 class="card-title">Manajemen Stok Barang</h1>
      </div>
      <div class="card-body">
        <a href="<?php echo site_url('barang/tambah'); ?>" class="btn btn-custom btn-custom-primary">
          <i class="fas fa-plus"></i> Tambah Barang
        </a>
        <div class="table-responsive mt-3">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga Barang</th>
                <th>Qty</th>
                <th>Action</th>
                <th>Kartu Stok</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($barang as $b): ?>
              <tr>
                <td><?php echo $b->kode_barang; ?></td>
                <td><?php echo $b->nama_barang; ?></td>
                <td>Rp <?php echo number_format((double)$b->harga_barang, 0, ',', '.');?></td>
                <td><?php echo $b->qty; ?></td>
                <td>
                  <a href="<?php echo site_url('barang/edit/'.$b->id); ?>" class="btn btn-custom btn-custom-secondary btn-sm">
                    <i class="fas fa-edit"></i> Edit
                  </a>
                  <a href="<?php echo site_url('barang/hapus/'.$b->id); ?>" class="btn btn-custom btn-custom-secondary btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?');">
                    <i class="fas fa-trash"></i> Hapus
                  </a>
                </td>
                <td>
                  <a href="<?php echo site_url('barang/kartu_stok/'.$b->id); ?>" class="btn btn-custom btn-custom-outline btn-sm">
                    <i class="fas fa-eye"></i> Lihat Kartu Stok
                  </a>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <div class="pagination">
          <?php echo $this->pagination->create_links(); ?>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
