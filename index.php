<?php

    $kategori = array("Macera","Dram","Komedi","Korku");

    array_push($kategori,"Fantastik");
    sort($kategori);

    $filmler = array(
        "1" => array(
            "baslik" => "Paper Lives",
            "aciklama" => "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)",
            "resim" => "1.jpeg",
            "yorumSayisi" => "Yorumgit com  : 55",
            "begeniSayisi" => "Beğeni: 85",
            "vizyon" => "Viyonda: Evet"
        ),
        "2" => array(
            "baslik" => "Walking Dead",
            "aciklama" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
            "resim" => "2.jpeg",
            "yorumSayisi" => "Yorum: 55",
            "begeniSayisi" => "Beğeni: 85",
            "vizyon" => "Viyonda: Evet"
        )
    );

    $yeni_film = array(
        "baslik" => "Lucifer",
            "aciklama" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
            "resim" => "3.jpeg",
            "yorumSayisi" => "Yorum: 55",
            "begeniSayisi" => "Beğeni: 85",
            "vizyon" => "Viyonda: Evet"
    );
    
    $filmler["0"] = $yeni_film;

    // 1- Film açıklamasındaki baş harf hariç tüm harfleri küçük harfe çeviriniz.
    // 2- Film açıklaması içindeki ilk 50 karakteri alarak sonuna "..." ekleyiniz. (substr) 
    function convertDescription($description) {
        $shortDescription = substr($description, 0, 50); // Get the first 50 characters
        if (strlen($description) > 50) { // Check if the description is longer than 50 characters
            $shortDescription .= "..."; // Append ellipsis if the description is longer
        }
        return ucfirst(strtolower($shortDescription)); // Capitalize the first letter and convert to lowercase
    }

    // 3- Her bir film için url bilgisini film başlığına göre oluşturunuz.
    function generateUrl($title) {
        $url = strtolower(str_replace(" ", "-", $title)); // Replace spaces with dashes and convert to lowercase
        return $url;
    }

    // 4- "baslik" isminde bir sabit oluşturarak sayfanın h1 etiketinde kullanınız.
    define("BASLIK", "Film Listesi");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container my-3">
        <h1><?php echo BASLIK ?></h1>
        <div class="row">
            <div class="col-3">
                <ul class="list-group">
                    <?php foreach ($kategori as $kat): ?>
                        <li class="list-group-item"><?php echo $kat ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-9">
                <?php foreach ($filmler as $key => $film): ?>
                    <div class="card mb-3">
                        <div class="row">
                            <div class="col-3">
                                <?php echo "<img class=\"img-fluid\" src=\"img/{$film["resim"]}\">" ?>
                            </div>
                            <div class="col-9">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $film["baslik"]?></h5>
                                    <p class="card-text">
                                        <?php echo convertDescription($film["aciklama"])?>
                                    </p>
                                    <div>
                                        <span class="badge bg-success">Yapım Tarihi: 03.12.2021</span>
                                        <span class="badge bg-success"><?php echo $film["yorumSayisi"]?></span>
                                        <span class="badge bg-success"><?php echo $film["begeniSayisi"]?></span>
                                        <span class="badge bg-success"><?php echo $film["vizyon"]?></span>
                                    </div><br>
                                    <a href="<?php echo generateUrl($film["baslik"]) ?>" class="btn btn-primary">Detaylar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>
</html>
