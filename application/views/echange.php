<div>
    <h2 style="
    color: lightseagreen;
    position: absolute;
    left: 162px;
">Vous trouverez ici tous les personnes qui veulent échanger avec vous</h2>
</div>

<div class="container_echange">
    <?php foreach ($row as $demande){ ?>
        <div class="row rowM" style="height: 200px;">
            <div class="col-xxl-2"><a href="#"><img src="<?php echo base_url('assets/img/'.$demande['nom2'].'/'.$demande['iddemande'].'/1.jpg') ?>" style="width: 200px;height: 200px;"></a></div>
            <div class="col-xxl-1"><i class="fas fa-exchange-alt" style="font-size: 39px;margin-top: 84px;margin-right: 0px;margin-left: 23px;"></i></div>
            <div class="col-xxl-2"><a href="#"><img src="<?php echo base_url('assets/img/'.$demande['nom1'].'/'.$demande['iddemandant'].'/1.jpg') ?>" style="width: 200px;height: 200px;"></a></div>
            <div class="col-xxl-1"><a href=<?php echo base_url('home/accepter/'.$demande['iddemande'].'/'.$demande['iddemandant']); ?>><button class="btn btn-primary" type="button" style="background: var(--bs-teal);margin-top: 84px;">Accepter</button></a></div>
            <div class="col-xxl-1"><a href=<?php echo base_url('home/refuser/'.$demande['iddemande'].'/'.$demande['iddemandant']); ?>><button class="btn btn-primary" type="button" style="background: var(--bs-red);margin-top: 84px;">Refuser</button></a></div>
        </div>
    <?php } ?>

</div>