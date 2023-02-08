<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>E-Takalo</title>
    <link rel="stylesheet" href=<?php echo base_url('assets/assets/bootstrap/css/bootstrap.min.css')?>>
    <link rel="stylesheet" href=<?php echo base_url('assets/assets/fonts/fontawesome-all.min.css') ?>>
    <link rel="stylesheet" href=<?php echo base_url('assets/assets/css/Footer-Clean-icons.css') ?>>
    <link rel="stylesheet" href=<?php echo base_url('assets/assets/css/Articles-Cards-images.css') ?>>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href=<?php echo base_url('assets/css/bulma.min.css')?>>
    <link rel="stylesheet" href=<?php echo base_url('assets/css/style.css')?>>
</head>

<body style="background: white;">
<nav class="navbar navbar-light navbar-expand-md" style="background-color: var(--bs-gray-300);">
    <div class="container-fluid"><a class="navbar-brand" href="<?php echo base_url('home/')?>">E-Takalo</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav">
                <li class="nav-item" style="margin: 0px;margin-right: 0px;margin-left: 461px;"><a class="nav-link" href="<?php echo base_url('home/')?>" style="margin-left: -40px;padding: 8px;">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('home/magasin')?>" style="margin-left: 30px;">Autres Objets</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('home/echange') ?>" style="margin-left: 30px;">Echanges</a></li>
            </ul>
        </div>
        <form action="<?php echo base_url('home/search'); ?>" method="post">
            <input type="text" style="margin-bottom: 0px;margin-right: 120px;" name="search">
            <select name="categorie" style="top: 21px;position: absolute;left: 79%;">
                <option value="">Tous</option>
                <?php foreach ($row_categorie as $categorie){?>
                    <option value=<?php echo $categorie['id']; ?>><?php echo $categorie['nomcategorie']; ?></option>
                <?php } ?>
            </select>
            <input class="btn btn-primary" type="submit" style="border-radius: 6px;background-color: lightseagreen;margin-right: 37px;margin-left: 3px;height: 36px;width: 70px;" value="search">
        </form>
        <a href=<?php echo base_url('login/deconnect')?>><i class="fas fa-sign-out-alt" style="color: lightseagreen;font-size: 32px;margin-left: 0px;margin-right: 14px;"></i></a>
    </div>
</nav>

</body>

</html>
