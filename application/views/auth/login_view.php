<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url('/asset/bootstrap/css/bootstrap.min.css'); ?>">
    <style>
        body {
            background: #2c3e50; /* Warna hitam semi-putih */
            color: #ecf0f1;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            padding: 20px;
            background: #34495e;
            border-radius: 8px;
            width: 100%;
            max-width: 360px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .login-header {
            margin-bottom: 20px;
            text-align: center;
        }
        .login-header h2 {
            font-weight: 600;
            color: #ecf0f1; /* Putih semi-transparan */
        }
        .form-group label {
            font-weight: bold;
            color: #ecf0f1; /* Putih semi-transparan */
        }
        .form-control {
            border-radius: 4px;
            border: 1px solid #7f8c8d; /* Border abu-abu lembut */
            background: #2c3e50; /* Hitam semi-putih */
            color: #ecf0f1;
        }
        .btn-primary {
            background: #1abc9c; /* Hijau */
            border: none;
            border-radius: 4px;
            padding: 10px;
            font-size: 14px;
            font-weight: bold;
            width: 100%;
            color: #ecf0f1;
        }
        .alert {
            margin-bottom: 20px;
            font-size: 14px;
            background: #c0392b; /* Merah tua */
            color: #ecf0f1;
        }
        .text-center a {
            color: #1abc9c; /* Hijau */
            font-weight: bold;
        }
        .text-center a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h2>Login</h2>
        </div>
        <?php if($this->session->flashdata('error')): ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>
        <form action="<?php echo site_url('Auth/login_action'); ?>" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <div class="mt-3 text-center">
            <a href="<?php echo site_url('Auth/register'); ?>">Register</a>
        </div>
    </div>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
</body>
</html>
