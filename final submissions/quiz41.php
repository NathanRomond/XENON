<!DOCTYPE html>
<html lang="en">
<head>
<title>Quiz 4 | Xenon Group | Question 1</title>
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
            <h1>
                Question 1 by Robin Balatbat
            </h1>
        </header>
        <form method="POST" action="#">
            <p>Add two numbers</p>
            <ul>
                <label for="number1">Enter Number One: </label>
                <input type="number" id="word" name="number1" required>
                <label for="number2">Enter Number Two: </label>
                <input type="number" id="word" name="number2" required>
            </ul>
            <div id="displaycircle">
                <?php
                    include "include.php";
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $numberOne = $_POST["number1"];
                        $numberTwo = $_POST["number2"];
                        $newNum = addTwo($numberOne, $numberTwo);
                        echo "Your added numbers are: " .$newNum;
                    }
                    else{echo "Input some numbers!";}
                ?>
            </div>
            <input type="submit" value="Add Two">
        </form>
    </main>
</body>
</html>