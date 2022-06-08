<!-- Creiamo un array contenente le partite di basket di
 un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite,
  punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
  Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks 1</title>
</head>

<body>
    <?php
    $match_array = [
        [
            "home-team" => "Oulx RG",
            "away-team" => "Bardonecchia SG",
            "home-points" => 36,
            "away-points" => 32
        ],
        [
            "home-team" => "Salbe FJ",
            "away-team" => "Sauze WQ",
            "home-points" => 42,
            "away-points" => 44
        ],
        [
            "home-team" => "Susa WE",
            "away-team" => "Cesana GH",
            "home-points" => 54,
            "away-points" => 25
        ],
        [
            "home-team" => "Oulx MS",
            "away-team" => "Bussoleno GG",
            "home-points" => 67,
            "away-points" => 34
        ],
    ];

    for ($i = 0; $i < count($match_array); $i++) {
    ?>

    <div>
        <?php echo $match_array[$i]["home-team"] ." - ". $match_array[$i]["away-team"] ." | " . $match_array[$i]["home-points"]
        . " - " . $match_array[$i]["away-points"]?>
    </div>
    <?php }?>



</body>

</html>