<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Universitas AKI - Tentang Kami</title>
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .card {
            border: none;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            transition: box-shadow 0.3s ease;
        }
        .card:hover {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .card-body {
            padding: 20px;
        }
        footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 15px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .navbar-brand img {
            height: 70px; 
        }
        .navbar-custom {
            background-color: #007bff;
            padding: 15px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        .navbar-custom .navbar-brand, 
        .navbar-custom .nav-link {
            color: #fff;
            font-size: 18px;
            display: flex;
            align-items: center;
        }
        .navbar-custom .nav-link:hover {
            color: #f8f9fa;
            text-decoration: underline;
        }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%288%2C 8%2C 8%2C 0.5%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }
        .nav-item {
            margin: 0;
        }
        .form-container {
            margin: 20px 0;
        }
        .btn-small {
            font-size: 14px;
            padding: 8px 12px;
        }
        .form-container .col-md-6 {
            padding: 10px;
        }
        .card-img-top {
            margin-bottom: 20px;
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
    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%288%2C 8%2C 8%2C 0.5%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }
    .navbar-nav .nav-item {
      margin-left: 15px; /* Jarak antar item di navbar */
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo site_url('Home'); ?>">
                <img src="<?php echo base_url();?>/asset/img/logo1.png" alt="Logo">
                <span style="font-size: 24px; display: inline-block;">Klinik Universitas AKI</span>
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
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3>Tentang Klinik Universitas AKI</h3>
                        <p>Selamat datang di Klinik Universitas AKI, tempat terpercaya untuk perawatan kesehatan Anda. Kami berkomitmen untuk menyediakan layanan kesehatan dengan fokus pada kualitas, layanan pelanggan, dan harga yang terjangkau.</p>
                        <p>Didirikan pada tahun 2024, Klinik Universitas AKI telah berkembang pesat sejak awal berdirinya. Kami kini melayani pasien di seluruh Indonesia dan bangga menjadi bagian dari industri kesehatan yang terus berkembang.</p>
                        <p>Kami berharap Anda menikmati layanan kami sebanyak kami menikmati menyediakannya untuk Anda. Jika Anda memiliki pertanyaan atau komentar, jangan ragu untuk menghubungi kami.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
            </div>
        </div>
    </div>
    <script src="<?php echo base_url();?>/asset/bootstrap/js/bootstrap.js"></script>
</body>
</html>
