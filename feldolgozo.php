<?php
// Egyszerű feldolgozó - bemeneteket kiírjuk (nem tárolunk)
// Biztonsági megjegyzés: éles környezetben használj alaposabb validációt és sanitizálást.
function h($s) { return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }
$nev = h($_POST['nev'] ?? '');
$pin = h($_POST['pin'] ?? '');
$gyumolcs = h($_POST['gyumolcs'] ?? '');
$eletkor = h($_POST['eletkor'] ?? '');
$lab = h($_POST['lab'] ?? '');
$onbizalom = h($_POST['onbizalom'] ?? '');
?>
<!doctype html>
<html lang="hu">
<head><meta charset="utf-8"><title>Feldolgozó</title></head>
<body>
  <h1>Beküldött adatok</h1>
  <ul>
    <li>Név: <?= $nev ?></li>
    <li>PIN: <?= $pin ?></li>
    <li>Kedvenc gyümölcs: <?= $gyumolcs ?></li>
    <li>Életkor: <?= $eletkor ?></li>
    <li>Lábméret: <?= $lab ?></li>
    <li>Önbizalom: <?= $onbizalom ?></li>
  </ul>
  <p><a href="Hny3vq_urlap.html">Vissza az űrlapra</a></p>
</body>
</html>
