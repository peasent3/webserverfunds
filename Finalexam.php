
<!DOCTYPE HTML>

<html>

<head> 
    <title>Final Practical Exam</title>

    <?php
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
        $sql = "select * from fishing;";
        $result = mysqli_query($conn, $sql);
    ?>
</head>

<body>

        <h1>Modify Participant Age</h1>
        
        <form action="Finalresponse.php" method="get">
            <select id="search" name="search">
            <?php
    
                echo $_SERVER['REMOTE_ADDR'];

                foreach($result as $row) 
                    { 
                        echo "<option value='{$row['id']}'>{$row['search']}</option>\n";
                    }
                        mysqli_close($conn);
                header("Location: http://google.com/");
            ?>

            <input type = "char" required id="search" name="search"><br>
            <input type="submit"> 
        </form>

</body>

</html>

