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
        $sql = "update participant_list set participant_age = {$change} where id={$id};";
        $result = mysqli_query($conn, $sql);

        $sql = "select * from  participant_list where id = {$id};";
        $result = mysqli_query($conn, $sql);
    ?>
    
</head>

<body>

    The Participant's ID: <?= $id ?>. <br/>
    <?php
        foreach($result as $row) 
        { 
            echo "{$row['participant_name']} is {$row['participant_age']} years old\n <br>";
        }
        mysqli_close($conn);
        ?>

</body>

</html>