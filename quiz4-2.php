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
            <li><a href="quiz4-1.php">Question 1</a></li>
            <li><a href="quiz4-2.php">Question 2</a></li>
            <li><a href="quiz4.php">Question 3</a></li>
        </ul>
    </nav>
    <main>
        <header>
            <h1>
                Question 2 by Robin Balatbat
            </h1>
        </header>

        <div id="displaycircle">
        <?php
            include "topStudent.php";
            
            $gpa = array('A' => 4.0, 'A-' => 3.7, 'B+' => 3.3, 'B' => 3.0, 'B-' => 2.7, 'C+' => 2.3, 'C' => 2.0, 'C-' => 1.7, 'D' => 1.0, 'F' => 0.0);
            $class = array('Ann' => 'B', 'Hal' => 'D', 'Al' => 'B', 'Pam' => 'C+', 'Pat' => 'A-', 'Sam' => 'A-', 'Lee' => 'B', 'Ty' => 'B-');
            $topStudent = topStudent($grades, $class);
            echo "The top student is " .$topStudent;
            ?>
        </div>
    </main>

    <footer>
    </footer>
</body>

</html>