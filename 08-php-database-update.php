<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
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

        $sql = "UPDATE produto SET nomeProduto='Garrafa Pet' WHERE nomeProduto='Garrafa'";

        if (mysqli_query($conn, $sql)) {
            echo "Product updated successfully";
        } else {
            echo "Error updating product: " . mysqli_error($conn);
        }

        echo "<br>";

        $sql = "UPDATE pessoa SET nomePessoa='Gervásio Silva ' WHERE cpf=78444743194";

        if (mysqli_query($conn, $sql)) {
            echo "Person updated successfully";
        } else {
            echo "Error updating person: " . mysqli_error($conn);
        }



        mysqli_close($conn);
    ?>
</body>
</html>