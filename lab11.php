<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LED Control</title>
</head>
<body>

    <h1>LED Control</h1>

    <form action="control.php" method="post">
        <label for="ledToggle">Toggle LED:</label>
        <button type="submit" name="ledToggle" value="on">Turn On</button>
        <button type="submit" name="ledToggle" value="off">Turn Off</button>
    </form>

</body>
</html>