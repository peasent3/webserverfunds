<!DOCTYPE HTML>

<head> 

    <title>Lab#5: Study Club</title>


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
        $sql = "select * from participant_list;";
        $result = mysqli_query($conn, $sql);
    ?>

</head>

<body>

    <h2>User Agent</h2>
    <p><?= $_SERVER['HTTP_USER_AGENT'] ?></p>

    <h2>Study Club Register</h2>

    <form action="register.php" method = "POST">


    <p> Enter name: <input type="text" id="name" name="name" /></p> 
    <p> Last name: <input type="text" id="lastname" name="lastname" /></p> 
    <p> School you attend: <input type="text" id="school" name="school" /></p>     
     
    <div> Select Grade:<br />
    <label for="grade">Grade:</label>
            <select id="grade" name="grade">
                <option value="grade4">Grade 4</option>
                <option value="grade5">Grade 5</option>
                <option value="grade6">Grade 6</option>
                <option value="sec1">Secondary 1</option>
                <option value="sec2">Secondary 2</option>
            </select>
    </div>

    <div> Select Subject:<br />
    <label for="subject">Subject:</label>
            <select id="subject" name="subject">
                <option value="math">Math</option>
                <option value="french">French</option>
                <option value="science">Science</option>
            </select>
    </div>

    <input type="submit"> 

    </form>

</body>

    <h1>Participant_list info </h1>

        <form action="clubresponse.php" method = "get">
            
            <div> List of Participant:<br/>
            <label for="peoplename">name:</label>
                    <select id="participantname" name="participantname">
                    <?php
                        foreach($result as $row) 
                        { 
                            echo "<option value='{$row['id']}'>{$row['participant_name']}</option>\n";
                        }
                        mysqli_close($conn);
                    ?>
                    </select>
                    <br>
            </div>
            <input type="submit"> 
        </form>


    <h1>Modify Info</h1>

    <form action="modifyinfo.php" method="get">
        <select id="participantname" name="participantname"><br>
        <?php
            foreach($result as $row) 
                { 
                    echo "<option value='{$row['id']}'>{$row['participant_name']}</option>\n";
                }
                    mysqli_close($conn);
        ?>

        New Age:<input type ="number" required id="participanage" name="participantage"><br>
        <input type="submit"> 
    </form>

                        
</body>

