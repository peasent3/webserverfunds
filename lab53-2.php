<!DOCTYPE HTML>

<head> 

    <title>Lab#5: Study Club</title>

</head>

<body>

    <h2>User Agent</h2>
    <p><?= $_SERVER['HTTP_USER_AGENT'] ?></p>

    <h2>Study Club Register</h2>

    <form action="register.php" method = "GET">


    <p> Enter your name: <input type="text" id="name" name="name" /></p> 
    <p> Last name: <input type="text" id="lastname" name="lastname" /></p>   
      
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

