<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        .register-container {
            padding: 20px;
            background: #34495e;
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 50px; /* Tambahkan margin atas */
        }
        .register-header {
            margin-bottom: 20px;
            text-align: center;
        }
        .register-header h2 {
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
    <div class="register-container">
        <div class="register-header">
            <h2>Register</h2>
        </div>
        <?php if($this->session->flashdata('error')): ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>
        <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>
        <form action="<?php echo site_url('Auth/register_action'); ?>" method="POST">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" required>
            </div>
            <div class="form-group">
                <label for="place_of_birth">Place of Birth</label>
                <input type="text" name="place_of_birth" class="form-control" id="place_of_birth" required>
            </div>
            <div class="form-group">
                <label for="home_address">Home Address</label>
                <textarea name="home_address" class="form-control" id="home_address" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="work_address">Work Address</label>
                <textarea name="work_address" class="form-control" id="work_address" rows="2"></textarea>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
        <div class="mt-3 text-center">
            <a href="<?php echo site_url('Auth/login'); ?>">Already have an account? Login</a>
        </div>
    </div>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
</body>
</html>
