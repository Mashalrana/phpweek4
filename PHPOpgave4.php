<?php

// Opdracht 1
echo "Opdracht 1:<br />";
for ($i = 0; $i <= 50; $i++) {
    echo $i . "<br />";
}
echo "<br />";

// Opdracht 2
echo "Opdracht 2:<br />";
$klasgenoten = [
    "Naam 1",
    "Naam 2",
    "Naam 3",
    "Naam 4",
    "Naam 5",
    "Naam 6",
    "Naam 7",
    "Naam 8",
    "Naam 9",
    "Naam 10"
];
foreach ($klasgenoten as $naam) {
    echo $naam . "<br />";
}
echo "<br />";

// Opdracht 3
echo "Opdracht 3:<br />";
$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']; 
for ($i = 3; $i < count($maanden); $i++) {
    echo 'Maand ' . ($i + 1) . ' is ' . $maanden[$i] . '.<br />';
}
echo "<br />";

// Opdracht 4
echo "Opdracht 4:<br />";
foreach ($maanden as $index => $maand) {
    if ($index >= 3) {
        echo 'Maand ' . ($index + 1) . ' is ' . $maand . '.<br />';
    }
}

?>
