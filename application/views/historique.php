<?php $i=1;
foreach ($row as $histo){?>
    <div class="row rowM">
        <div class="col-xxl-1">
            <h5><?php echo $i; ?></h5>
        </div>
        <div class="col-xxl-2">
            <h3 class="text-success"><?php echo $histo['nom']; ?></h3>
        </div>
        <div class="col">
            <h4><?php echo $histo['date']; ?></h4>
        </div>
    </div>
<?php $i++; }
