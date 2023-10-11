<!DOCTYPE HTML>

<head> 

    <title>Lab#5: Study Club</title>

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
</body>

