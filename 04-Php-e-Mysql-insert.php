<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
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

        $sql = "INSERT INTO produto (nomeProduto, pesoProduto, precoProduto)
        VALUES ('Garrafa', '0.1', '12.89');";

        // $sql .= "INSERT INTO produto (nomeProduto, pesoProduto, precoProduto)
        // VALUES ('Copo', '0.2', '5.29');";

        // $sql .= "INSERT INTO produto (nomeProduto, pesoProduto, precoProduto)
        // VALUES ('Televisão', '10.50', '3750.89')";

        if (mysqli_query($conn, $sql)) {
            echo "New product record created successfully<br>";
        } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        $sql = "INSERT INTO pessoa (cpf, nomePessoa, idadePessoa)
        VALUES (78444743194, 'Gervásio Ombrósio da Silva', '72')";

        // $sql .= "INSERT INTO pessoa (cpf, nomePessoa, idadePessoa)
        // VALUES (26227001309, 'Nicole Luiza Leite', '11')";

        // $sql .= "INSERT INTO pessoa (cpf, nomePessoa, idadePessoa)
        // VALUES (06654241088, 'Lorenzo Campos Fernandes', '10')";

        if (mysqli_query($conn, $sql)) {
            echo "New person record created successfully<br>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    ?>
</body>
</html>