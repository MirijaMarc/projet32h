<div class="container py-4 py-xl-5">
    <div class="row mb-5">
        <div class="col-md-8 col-xl-6 text-center mx-auto">
            <h2>Takalo</h2>
            <p class="w-lg-50">Vous pourrez echanger vos objets ici ! Rien de plus simple.</p>
        </div>
    </div>
    <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
        <?php foreach ($row as $objet){ ?>
        <div class="col">
            <div class="card"><img class="card-img-top w-100 d-block fit-cover img_magasin" style="height: 292px;" src=<?php echo base_url('assets/img/'.$objet['nomcategorie'].'/'.$objet['id'].'.jpg') ?>>
                <div class="card-body p-4">
                    <p class="text-primary card-text mb-0"><?php echo $objet['nomcategorie']; ?></p>
                    <h4 class="card-title"><?php echo $objet['nomobjet']; ?></h4>
                    <p class="card-text"><?php echo $objet['description']; ?></p>
                    <div class="d-flex">
                        <div>
                            <p class="fw-bold mb-0"><?php echo $objet['nom']; ?> AR</p>
                            <p class="text-muted mb-0"><?php echo $objet['prix']; ?> AR</p>
                        </div><a href="<?php echo base_url("home/choix/".$objet['id']); ?>" style="position: relative;left: 118px;font-size: 24PX;">Echanger</a>
                        <a href="<?php echo base_url('home/historique/'.$objet['id'])?>" style="right: -7%;position: relative;top: 50px;">Historique de propriétaires</a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
