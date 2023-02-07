<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>header</title>
    <link rel="stylesheet" href=<?php echo base_url('assets/assets/bootstrap/css/bootstrap.min.css')?>>
    <link rel="stylesheet" href=<?php echo base_url('assets/assets/fonts/fontawesome-all.min.css') ?>>
    <link rel="stylesheet" href=<?php echo base_url('assets/assets/css/Footer-Clean-icons.css') ?>>
    <link rel="stylesheet" href=<?php echo base_url('assets/assets/css/Articles-Cards-images.css') ?>>
    <link rel="stylesheet" href=<?php echo base_url('assets/assets/css/Features-Cards-icons.css') ?>>
    <link rel="stylesheet" href=<?php echo base_url('assets/css/style.css')?>>
</head>

<body style="background: white;">
<nav class="navbar navbar-light navbar-expand-md" style="background-color: var(--bs-gray-300);">
    <div class="container-fluid"><a class="navbar-brand" href="<?php echo base_url('home/')?>">E-Takalo (ADMIN)</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav">
                <li class="nav-item" style="margin: 0px;margin-right: 0px;margin-left: 461px;"><a class="nav-link" href="<?php echo base_url('home_admin/')?>" style="margin-left: 3px;padding: 8px;">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('home_admin/')?>" style="margin-left: 30px;">Gestions</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('home_admin/statistique')?>" style="margin-left: 30px;">Statistiques</a></li>
            </ul>
        </div>
        <a href=<?php echo base_url('login/deconnect')?>><i class="fas fa-sign-out-alt" style="color: lightseagreen;font-size: 32px;margin-left: 0px;margin-right: 14px;"></i></a>
    </div>
</nav>

</body>

</html>
