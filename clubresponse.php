<!DOCTYPE html>
<html>
<head>
    <title>Lab7: PHP and SQL Response</title>
    <h1> Task 3.3 (content of array get and post) </h1>

    <?php
        $id = (int)($_GET["participantname"]);
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

        $sql = "select * from participant_list where participant_name = {$id};";
        $result = mysqli_query($conn, $sql);
    ?>

</head>

<body>
 
<p><?= var_dump($_GET) ?></p> 
<p><?= var_dump($_POST) ?></p>

<h1> Response of Participant </h1>

Participant: <?= $id ?>. <br/>
<?php
    foreach($result as $row) 
    { 
        echo "{$row['participant_name']} is {$row['participant_age']} years old\n <br>";
    }
    mysqli_close($conn);
    ?>

</body>
</html>