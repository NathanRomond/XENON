<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quiz 3</title>
    <meta charset="utf-8">

    <style>
        body {
            background-color: rgb(26, 26, 26);
            color: rgb(231, 231, 231);
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
            color: rgb(231, 231, 231);
            font-style: none;
            text-decoration: none;
        }

        a:hover {
            color: orange;
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

        #prime {
            margin: 4%;
            margin-top: 0px;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php">Question 1</a></li>
            <li><a href="quiz3-2.php">Question 2</a></li>
            <li><a href="quiz3.php">Question 3</a></li>
        </ul>
    </nav>
    <main>
        <header>
            <h1>
                Question 1 by Robin Balatbat
            </h1>
        </header>
        <form method="post" action="quiz4-1.php">
            <ul>
                <label for="number1">Enter Number One: </label>
                <input type="number" id="word" name="number1" required>
                <label for="number2">Enter Number Two: </label>
                <input type="number" id="word" name="number2" required>
            </ul>
            <input type="submit" value="Add Two">
        </form>

        <div id="displaycircle">
            <?php
            include "addtwo.php";
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $numberOne = $_POST["number1"];
                $numberTwo = $_POST["number2"];

                $newNum = addTwo($numberOne, $numberTwo);

                echo "Your added numbers are: " .$newNum;
            }
            ?>
        </div>
    </main>

    <footer>
    </footer>
</body>

</html>