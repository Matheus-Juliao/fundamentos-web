<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "mysql";
        $dbname = "si3a";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT idProduto, nomeProduto, pesoProduto, precoProduto FROM produto";
        $result = mysqli_query($conn, $sql);

        echo '<h3>PRODUTO</h3><br>';

        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo    "id: " . $row["idProduto"]. 
                    " - Nome: " . $row["nomeProduto"]. 
                    " - Peso: " . $row["pesoProduto"]. 
                    " - Preço: " . $row["precoProduto"].
                    " " . "<br>";
        }
        } else {
        echo "0 results";
        }

        $sql = "SELECT cpf, nomePessoa, idadePessoa FROM pessoa";
        $result = mysqli_query($conn, $sql);

        echo '<h3>PESSOA</h3><br>';

        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo    "CPF: " . $row["cpf"]. 
                    " - Nome: " . $row["nomePessoa"]. 
                    " - Idade: " . $row["idadePessoa"].
                    " " . "<br>";
        }
        } else {
        echo "0 results";
        }

        mysqli_close($conn);
    ?>
</body>
</html>