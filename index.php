<!DOCTYPE html>
<html lang="eng-us">

<head>
    <title>Form Data Processing using Get/Post Method</title>
</head>

<body>

    <form method="GET" action="Includes/index-form.php">
        <label>First Name</label>
        <input type="text" name="fname">
        <br>
        <label>Last Name</label>
        <input type="text" name="lname">
        <br>
        <input type="submit" value="Submit" name="submit">
    </form>

    <form action="Includes/index-form.php" method="POST">
        <label>First Name</label>
        <input type="text" name="fname">
        <br>
        <label>Last Name</label>
        <input type="text" name="lname">
        <br>
        <input type="submit" value="Submit" name="submit2">
    </form>

</body>

</html>