<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sorular = array(
        array(
            'soru' => 'Hangi ülkenin başkenti Paris\'tir?',
            'dogru_cevap' => 'a'
        ),
        array(
            'soru' => 'Dünyanın en uzun nehri hangisidir?',
            'dogru_cevap' => 'a'
        ),
        // Diğer soruların doğru cevaplarını buraya ekleyebilirsiniz
    );

    $dogruCevaplar = 0;

    // Her bir soru için doğru cevapları kontrol edin
    foreach ($sorular as $index => $soru) {
        $cevap = $_POST['cevap_' . $index];

        if ($cevap == $soru['dogru_cevap']) {
            $dogruCevaplar++;
        }
    }

    // Sonucu görüntüleyin
    echo "Doğru cevap sayısı: " . $dogruCevaplar;
}
?>


