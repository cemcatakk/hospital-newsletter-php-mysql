<?php
require 'vt.php';
$vt = new Veritabani();
?>
<!doctype html>
<html lang="tr">

<head>
    <title>Mesajlar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light position-fixed">
        <?php include 'menu.php'; ?>
    </nav>
    <div class="kayitOl-section ">
        <form style="display: block !important;" action="islem.php" method="POST" name="bultenaktar">
            <div class="kayitOl-left">
                <?php
                foreach ($vt->DiziDondur("SELECT * FROM kullanici", array("id", "ad", "soyad", "kangrubu", "adres")) as $kullanici) {
                    echo "<p> Ad Soyad: $kullanici[1] $kullanici[2] Kan Grubu: $kullanici[3] Adres: $kullanici[4]";
                ?><div class="field-wrapper">
                        <input type="submit" value="Bültene Aktar" name=<?php echo $kullanici[0] ?>>
                    </div>
                <?php
                    echo "</p>";
                }
                ?>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</body>

</html>