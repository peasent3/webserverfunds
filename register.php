<!DOCTYPE HTML>

<html>
    <head>
        <title>Registar</title>
    </head>

    <body>

        <p>Your name is: <?= htmlspecialchars($_POST['name']) . " " . htmlspecialchars($_POST['lastname'])?></p>
        <p>Your school is: <?= htmlspecialchars($_POST['school']) ?></p>
        <p>Your Grade is: <?= htmlspecialchars($_POST['grade']) ?></p>
        <p>Chose Subject: <?= htmlspecialchars($_POST['subject']) ?></p>

    </body>
</html>