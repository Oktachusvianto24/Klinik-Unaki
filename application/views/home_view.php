<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Universitas AKI - Home</title>
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <style>
        body {
            background-color: #f4f4f9;
            margin-bottom: 60px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container {
            margin-top: 30px;
        }
        .clinic-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .clinic-header img {
            height: 120px;  
        }
        .clinic-header h1 {
            font-size: 36px;
            color: #343a40;
            margin-top: 20px;
        }
        footer {
            background-color: #212529;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
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
        .btn-primary-custom {
            background-color: #20c997;
            border-color: #20c997;
            color: #fff;
            font-size: 18px;
            transition: background-color 0.3s, border-color 0.3s;
        }
        .btn-primary-custom:hover {
            background-color: #17a589;
            border-color: #17a589;
        }
        .btn-logout {
            background-color: #ff6f61;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s, box-shadow 0.3s;
        }
        .btn-logout:hover {
            background-color: #e55b53;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo site_url('Home'); ?>">
                <img src="<?php echo base_url();?>/asset/img/logo1.png" alt="Logo">
                <span>Klinik Universitas AKI</span>
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
        <div class="clinic-header">
            <img src="<?php echo base_url();?>/asset/img/logo1.png" alt="Klinik Universitas AKI Logo">
            <h1>Klinik Universitas AKI</h1>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php echo site_url('/barang/index'); ?>" class="btn btn-primary-custom btn-lg">Lihat Stock Barang Kami</a>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url();?>/asset/bootstrap/js/bootstrap.js"></script>
</body>
</html>
