<section class="photo-gallery py-4 py-xl-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>Choisissez votre Objet à Echanger</h2>
            </div>
        </div>
        <div class="row gx-2 gy-2 row-cols-1 row-cols-md-2 row-cols-xl-3 photos" data-bss-baguettebox="">
            <?php foreach ($row as $objet){?>
                <div class="col item"><a href=<?php echo base_url('home/demande/'.$iddemande.'/'.$objet['id'])?>><img class="img-fluid image_choix" style="height: 292px; width: 292px" src=<?php echo base_url('assets/img/'.$objet['nomcategorie'].'/'.$objet['id'].'.jpg') ?>></a></div>
            <?php } ?>

        </div>
    </div>
</section>
