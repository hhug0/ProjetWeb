<!DOCTYPE html>
<html>
<head>
    <title>EXO2</title>
    <meta charset="utf-8">
</head>

<body>
    
<form method="POST" action="resultat.php">
    <?php
    $sorular = array(
        array(
            'soru' => 'Hangi ülkenin başkenti Paris\'tir?',
            'cevaplar' => array('a' => 'Fransa', 'b' => 'İtalya', 'c' => 'Almanya'),
            'dogru_cevap' => 'a'
        ),
        array(
            'soru' => 'Dünyanın en uzun nehri hangisidir?',
            'cevaplar' => array('a' => 'Nil Nehri', 'b' => 'Amazon Nehri', 'c' => 'Mississippi Nehri'),
            'dogru_cevap' => 'a'
        ),
        // Diğer soruları buraya ekleyebilirsiniz
    );

    // Her bir soru için döngü oluşturarak soru ve cevapları gösterin
    foreach ($sorular as $index => $soru) {
        echo "<p>Soru " . ($index + 1) . ": " . $soru['soru'] . "</p>";

        foreach ($soru['cevaplar'] as $cevapId => $cevap) {
            echo "<input type='radio' name='cevap_$index' value='$cevapId'> $cevap <br>";
        }

        echo "<br>";
    }
    ?>

    <input type="submit" value="Cevapla">
</form>
on: <?php echo $_POST["question"]; ?></p>
</body>
</html>
