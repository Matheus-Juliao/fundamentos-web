<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
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

        $sql = "DELETE FROM produto WHERE nomeProduto='Garrafa Pet'";

        if ($conn->query($sql) === TRUE) {
            echo "Product deleted successfully";
        } else {
            echo "Error deleting product: " . $conn->error;
        }

        echo "<br>";

        $sql = "DELETE FROM pessoa WHERE cpf=78444743194";

        if ($conn->query($sql) === TRUE) {
            echo "Person deleted successfully";
        } else {
            echo "Error deleting person: " . $conn->error;
        }

        mysqli_close($conn);
    ?>
</body>
</html>