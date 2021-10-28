<!DOCTYPE html>
<html lang="en">
<head>
<title>Quiz 4 | Xenon Group | Question 3</title>
<meta charset="utf-8">
    <style>
        body {
            background-color: rgb(231, 231, 231);
            color: rgb(26, 26, 26);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        nav {
            margin-top: 10vh;
        }

        main,
        nav {
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 0px;
            border: 1px solid white;
            border-radius: 3px;
        }

        nav ul {
            list-style: none;
            padding-left: 2%;
        }

        nav ul li {
            display: inline;
            padding-right: 6%;
        }

        a {
            color: rgb(26,26,26);
            font-style: none;
            text-decoration: none;
        }

        a:hover {
            color: red;
        }

        h1 {
            margin-left: 3%;
        }

        form {
            height: 40vh;
        }

        form ul {
            margin-top: 5vh;
            margin-left: 3%;
        }

        form ul li {
            margin-bottom: 3%;
        }

        form input {
            margin-left: 5%;
        }
    </style>
</head>

<body>
    <main>
    <nav>
            <ul>
                <li>
                <a href="quiz41.php">Question 1</a>
                </li>
                <li>
                <a href="quiz42.php">Question 2</a>
                </li>
                <li>
                <a href="quiz43.php">Question 3</a>
                </li>
            </ul>
        </nav>
        <header>
        <h1>Is it a Leap Year? - Nathan Romond</h1>
        </header>
        <p>Enter any year after 1 A.C.E. to check if it is a leap year!</p>
        <form method="POST" action="#">
        <label for="leapyear">Year:</label>
        <input type="number" id="leapyear" name="leapyear" value="Check">
        <br>
        <div>
        <?php
        include 'include2.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $input = $_POST['leapyear'];
            LeapYear($input);  
        }
        ?>
        </div>
        <input type="submit">Check!</input>        
        </form>
    </main>
</body>
</html>