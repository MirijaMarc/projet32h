
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @var string $row
 *  @var string $row_categorie
 */
?>

<div style="display: grid;">
    <div class="container py-4 py-xl-5 class_home" >
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            <?php foreach ($row as $objet){ ?>
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 292px;" src=<?php echo base_url('assets/img/'.$objet['nomcategorie'].'/'.$objet['id'].'.jpg') ?>>
                    <div class="card-body p-4">
                        <p class="text-primary card-text mb-0"><?php echo $objet['nomcategorie']; ?></p>
                        <h4 class="card-title"><?php echo $objet['nomobjet']; ?></h4>
                        <p class="card-text"><?php echo $objet['description']; ?></p>
                        <div class="d-flex" style="margin-top: 0px;margin-left: 0px;">
                            <div>
                                <p class="fw-bold mb-0"><?php echo $objet['prix']; ?> AR</p>
                                <p class="text-muted mb-0"></p>
                            </div><a href="#" style="position: relative;right: -53px;">+/-10%</a><a href="#" style="position: relative;right: -62px;/*margin-right: 7px;*/">+/-20%</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <button class="js-modal-trigger button is-link add_btn" data-target="modal-add-objet">
        <figure class="icon">
            <i class="fas fa-plus"></i>
        </figure>
    </button>
    <form action="<?php echo base_url("home/upload_objet"); ?>" method="post" enctype="multipart/form-data">
        <div id="modal-add-objet" class="modal">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="box">
                    <p class="subtitle is-4 modal_subtitle">Ajouter un nouveau objet</p>
                    <input class="input" type="text" placeholder="Object name" name="nomObj" required>
                    <input class="input modal_input" type="text" placeholder="Description" name="description" required>
                    <input class="input modal_input" type="number" placeholder="Object price" name="prixObj" required>
                    <select  class="input modal_input" name="categorie">
                        <?php foreach ($row_categorie as $categorie){?>
                            <option  value="<?php echo $categorie['id']; ?>"><?php echo $categorie['nomcategorie']; ?></option>
                        <?php } ?>
                    </select>
                    <input class="input modal_input" type="file" placeholder="Photo" name="nomPhoto" required>
                    <div class="div_modal_btn">
                        <button class="button is-primary"> Ajouter </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <button class="modal-close is-large" aria-label="close"></button>

</div>

