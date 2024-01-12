
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
        $sql = "select * from fish;";
        $result = mysqli_query($conn, $sql);
    ?>
</head>

<body>

        <h1>Google</h1>
        
        <form action="Finalresponse.php" method="get">

            <input type = "char" required id="search" name="search"><br>
    
            <input type="submit"> 
        </form>

</body>

</html>

