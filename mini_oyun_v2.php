<!DOCTYPE html>
<html>
<body>

<h1>Taş-Kağıt-Makas Oyunu</h1>
<form method="POST" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
<p>Birini seçin:  (1: Taş, 2: Kağıt, 3:Makas)</p>
  <input type="radio" id="tas" name="secim" value="1">
  <label for="tas">Taş</label><br>
  <input type="radio" id="kagit" name="secim" value="2">
  <label for="kagit">Kağıt</label><br>
  <input type="radio" id="makas" name="secim" value="3">
  <label for="makas">Makas</label><br/><br/>
  <input type="submit" value="Gönder">
</form>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $deg = $_POST["secim"];
        $comp = rand(1 , 3);
        print("Kullanıcı: $deg vs. Bilgisayar: $comp -");
        $durum = karsilastir($deg, $comp);
        if ($durum == 0)
            print("Berabere<br/>");
        elseif ($durum == 1){
            print("Bilgisayar Kazandı<br/>");
        }
        elseif ($durum == 2){
            print("Kullanıcı Kazandı<br/>");
        }
    }
?>

<p>
    <?php
    function karsilastir($deg, $comp){
        $durum = 0;
        if ($deg == $comp)
            $durum = 0;
        elseif ($deg == 1 && $comp ==2)
            $durum = 1;
        elseif ($deg == 3 && $comp ==1)
            $durum = 1;
        elseif ($deg == 2 && $comp ==3)
            $durum = 1;
        elseif ($deg == 2 && $comp ==1)
            $durum = 2;
        elseif ($deg == 1 && $comp ==3)
            $durum = 2;
        elseif ($deg == 3 && $comp ==2)
            $durum = 2;
        else
            $durum = 0;

        return $durum;
    }
    ?>
</p>
</body>
</html>