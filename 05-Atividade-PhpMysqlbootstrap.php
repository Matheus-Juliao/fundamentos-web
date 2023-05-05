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
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>PHP com Bootstrap</title>
    </head>
    <body> 
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">CPF</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT cpf, nomePessoa, idadePessoa FROM pessoa";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo 
                            "<tr class='table-danger'>
                                <th scope= 'row'> ". $row["cpf"]."</th>
                                <td>".  $row["nomePessoa"]."</td>
                                <td>". $row["idadePessoa"]."</td>
                            </tr>";
                        }
                    } else {
                        echo "0 results";
                    }
                ?>
        </table>
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Preço</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT idProduto, nomeProduto, pesoProduto, precoProduto FROM produto";
                    $result = mysqli_query($conn, $sql);

                    mysqli_close($conn);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo 
                            "<tr class='table-danger'>
                                <th scope= 'row'> ". $row["idProduto"]."</th>
                                <td>".  $row["nomeProduto"]."</td>
                                <td>". $row["pesoProduto"]."</td>
                                <td>". $row["precoProduto"]."</td>
                            </tr>";
                        }
                    } else {
                        echo "0 results";
      
                    }

                ?>
        </table>      
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>