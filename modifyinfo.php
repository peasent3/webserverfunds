<!DOCTYPE html>
<html>
<head>
    <title>Lab7 Modfiy Info</title>

    <?php
        $id = (int)($_GET["participantname"]);
        $change = (int)($_GET["participantage"]);
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
        $sql = "UPDATE participant_list SET participant_age = {$change} where id={$id};";
        $result = mysqli_query($conn, $sql);

        $sql = "select * from  participant_list where id = {$id};";
        $result = mysqli_query($conn, $sql);
    ?>
    
</head>

<body>

    You chosed the book: <?= $id ?>. <br/>
    <?php
        foreach($result as $row) 
        { 
            echo "{$row['author']} authored {$row['book_name']}\n <br>";
        }
        mysqli_close($conn);
        ?>

</body>

</html>