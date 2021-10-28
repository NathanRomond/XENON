<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz 4 | Is Leap Year</title>
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
            <li><a href="quiz4-1.php">Question 1</a></li>
            <li><a href="quiz4-2.php">Question 2</a></li>
            <li><a href="quiz4.php">Question 3</a></li>
        </ul>
    </nav>
    <main>
        <header>
            <h1>
                Question 3 by Nathan Rodson
            </h1>
        </header>
        <h1>Is it a Leap Year?</h1>
        <p>Enter any year after 1 A.C.E. to check if it is a leap year!</p>
        <form action="quiz4.php" method="post">
            <label for="leapyear">Year:</label>
            <input type="number" id="leapyear" name="leapyear" required></input>
            <br>
            <button>Check my Year</button>
        </form>

        <div id="displaycircle">
        <?php
            include "include.php";
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $input = $_POST['leapyear']; 
                
                $isLeap = leapYear($input);

                if ($isLeap) {
                    echo "Yes, your year is a leap year.";
                } else {
                    echo "No, your year is not a leap year.";
                }
                
            }
        ?>
        </div>
    </main>

    <footer>
    </footer>
</body>
</html>