<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dućan</title>
</head>
<body>
<?php
function statusDucana($stanje = "otvoren") {
    return $stanje;
}

$datumVrijeme = new DateTime();
$trenutniDan = $datumVrijeme->format('l');    
$trenutnoVrijeme = $datumVrijeme->format('H:i'); 
$trenutniDatum = $datumVrijeme->format('d-m-Y');   
$trenutniMjesecDan = $datumVrijeme->format('d-m'); 

$drzavniPraznici = ["01-01", "01-05", "25-06", "05-08", "15-08", "01-11", "25-12", "26-12"];


if (in_array($trenutniMjesecDan, $drzavniPraznici)) {
    $stanje = "zatvoren";
} elseif ($trenutniDan === "Sunday") {
    $stanje = "zatvoren";
} elseif ($trenutniDan === "Saturday") {
    $stanje = ($trenutnoVrijeme >= "09:00" && $trenutnoVrijeme <= "14:00") ? "otvoren" : "zatvoren";
} else {
    $stanje = ($trenutnoVrijeme >= "08:00" && $trenutnoVrijeme <= "20:00") ? "otvoren" : "zatvoren";
}

echo "Danas je $trenutniDan, datum je $trenutniDatum, a vrijeme je $trenutnoVrijeme.<br>";
echo "Dućan je trenutno " . statusDucana($stanje) . ".";
?>
      
<!-- vježba 9 - Ducan-->
</body>
</html>
