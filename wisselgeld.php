<?php
$bedrag = floatval($argv[1]);

$euroeenheden = array(
    500,
    200,
    100,
    50,
    20,
    10,
    5,
    2,
    1,
);

$restbedrag = $bedrag;
foreach($euroeenheden as $value) {
    if ($restbedrag >= $value) {
        $aantalKeer = floor($restbedrag / $value);
        $restbedrag = fmod($restbedrag, $value);
        echo "$aantalKeer X $value euro" . PHP_EOL;
    }
}
$centeenheden = array(
    50,
    20,
    10,
    5,  
);

function roundUpToAny($n) {
    $afgerondTiental = round($n, -1);
    if ($afgerondTiental > $n) {
        $afgerondVijftal = $afgerondTiental - 5;
    } else {
        $afgerondVijftal = $afgerondTiental + 5;
    }
    $afstandtotTiental = abs($afgerondTiental - $n);
    $afstandTotVijftal = abs($afgerondVijftal - $n);
    if ($afstandTotTiental > $afstandTotVijftal) {
        return $afgerondVijftal;
    } else {
        return $afgerondTiental;
    }
}
$restbedrag *= 100;
$restbedrag = roundUpToAny($restbedrag);
$restbedrag = round($restbedrag, 0);
$restbedrag = intval($restbedrag);
foreach($centeenheden as $value) {
    if ($restbedrag >= $value) {
        $aantalKeer1 = floor($restbedrag / $value);
        $restbedrag = fmod($restbedrag, $value);
        echo "$aantalKeer1 X $value cent" . PHP_EOL;
    }
} 
?>