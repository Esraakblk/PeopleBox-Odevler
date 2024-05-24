<?php

    $ozet = count(getData()["categories"]).' kategoride '.count(getData()["movies"]).' film listelenmiştir';
    const BASLIK = "Popüler Filmler";
?>
    
<h1 class="mb-4"><?php echo BASLIK; ?></h1>
<p class="text-muted">
    <?php echo $ozet; ?>
</p>