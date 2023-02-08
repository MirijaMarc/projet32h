
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @var string $row
 */
?>

<div style="display: grid;">
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            <?php foreach ($row as $objet){ ?>
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 292px;" src=<?php echo base_url('assets/img/'.$objet['nomcategorie'].'/'.$objet['id'].'/1.jpg') ?>>
                    <div class="card-body p-4">
                        <p class="text-primary card-text mb-0"><?php echo $objet['nomcategorie']; ?></p>
                        <h4 class="card-title"><?php echo $objet['nomobjet']; ?></h4>
                        <p class="card-text"><?php echo $objet['description']; ?></p>
                        <div class="d-flex" style="margin-top: 0px;margin-left: 0px;">
                            <div>
                                <p class="fw-bold mb-0"><?php echo $objet['prix']; ?> AR</p>
                                <p class="text-muted mb-0"></p>
                            </div><a href="#" style="position: relative;right: -80px;">+/-10%</a><a href="#" style="position: relative;right: -104px;/*margin-right: 7px;*/">+/-20%</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
