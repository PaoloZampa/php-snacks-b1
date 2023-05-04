<?php

/* Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */

$matches = [
    [
        "home_team" => "Milan",
        "away_team" => "Udinese",
        "home_score" => 76,
        "away_score" => 63
    ],
    [
        "home_team" => "Inter",
        "away_team" => "Salernitana",
        "home_score" => 81,
        "away_score" => 79
    ],
    [
        "home_team" => "Napoli",
        "away_team" => "Cagliari",
        "home_score" => 69,
        "away_score" => 72
    ],
    [
        "home_team" => "Juventus",
        "away_team" => "Pasianese",
        "home_score" => 94,
        "away_score" => 87
    ]
];

//var_dump($matches);

foreach ($matches as $match) {
    echo $match['home_team'] . " - " . $match['away_team'] . " | " . $match['home_score'] . " - " . $match['away_score'] . "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>

<body>

    <?php foreach ($matches as $match): ?>

        <p>
            <?= $match['home_team'] ?> -
            <?= $match['away_team'] ?> |
            <?= $match['home_score'] ?> -
            <?= $match['away_score'] ?>
        </p>

    <?php endforeach ?>


</body>

</html>