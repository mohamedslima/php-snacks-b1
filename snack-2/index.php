<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia 
più lungo di 3 caratteri, che mail contenga un
 punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>
    <?php
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];
    $mail_as = strpos($mail, "@");
    $mail_point = strpos($mail, ".");
    ?>

    <?php if (strlen($name) >= 3 && $mail_at !== false && $mail_point !== false && is_numeric($age)) { ?>
        <h2>
            Accesso riuscito!
        </h2>
        <?php} else { ?>
            <h2>
                Accesso Negato!
            </h2>
    <?php } ?>
</body>

</html>