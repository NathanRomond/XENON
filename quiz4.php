<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz 4 | Is Leap Year</title>
</head>
<body>
    <h1>Is it a Leap Year?</h1>
    <p>Enter any year after 1 A.C.E. to check if it is a leap year!</p>
    <form action="POST">
        <label for="leapyear">Year:</label>
        <input type="text" id="leapyear" name="leapyear"></input>
        <br>
        <button>Check my Year</button>
    </form>

    <?php
    include 'leap.php';
    ?>
</body>
</html>