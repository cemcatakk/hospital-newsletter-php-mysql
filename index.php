<?php
require 'vt.php';
$vt = new Veritabani();
?>
<!doctype html>
<html lang="tr">
<head>
    <title>Anasayfa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light position-fixed">
        <?php include 'menu.php';?>
    </nav>
    <form method="POST" action="islem.php">
    <div class="homepage-section">
        <div class="home-left">
            <h2>İhtiyaç Bülteni</h2>
            <div class="home-info">
                <div class="home-info-item d-flex align-items-center">
                    <i class="fas fa-user"></i>
                    <p>Hasta Adı</p>
                    <p><?php echo $vt->Bulten()['ad']; ?></p>
                </div>
                <div class="home-info-item d-flex align-items-center">
                    <i class="fas fa-hand-holding-heart"></i>
                    <p>Lazım olan kan grubu</p>
                    <p><?php echo $vt->Bulten()['kangrubu']; ?></p>
                </div>
                <div class="home-info-item d-flex align-items-center">
                    <i class="far fa-address-card"></i>
                    <p>Adres</p>
                    <p><?php echo $vt->Bulten()['adres']; ?></p>
                </div>
                <div class="home-info-item d-flex align-items-center">
                    <i class="fas fa-phone"></i>
                    <p>Telefon</p>
                    <p><?php echo $vt->Bulten()['telefon']; ?></p>
                </div>
            </div>
        </div>
        <div class="home-right">
            <textarea cols="30" rows="10" placeholder="Mesaj Kutusu" name="mesaj"></textarea>
            <input type="submit" class="kayitol-Btn" value="Gönder" name="mesajgonder">
        </div>
    </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</body>

</html>