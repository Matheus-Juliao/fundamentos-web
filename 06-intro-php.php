<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?php echo "Introdução ao if e else";?> </h1>

    <?php
        // $t = date("H");
        $idade = 15;
        echo "Idade: ", $idade, " anos";

        if($idade < "20") {
            echo "<br>Menor de idade!";
        } else {
            echo "<br>Maior de idade!";
        }
    ?>

    <?php
        $x = 1;
        echo "<br>";
        while($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
    }
    ?>
</body>
</html>