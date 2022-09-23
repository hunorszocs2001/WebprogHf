
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hazi-4</title>
    <style>
        table {
            border-collapse: collapse;
            border: 1px solid black;
            margin: 0 auto;
        }

        td {
            border: 1px solid black;
            text-align: center;
            width: 50px;
            height: 50px;
        }

    </style>
</head>
<body>
<?php
    echo "<table>";

    for ($i = 1; $i <= 8; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 8; $j++) {
            if ($i % 2 != 0) {
                if ($j % 2 == 0) {
                 echo "<td style='background-color: black'></td>";
             } else {
                 echo "<td></td>";
             }
            } else {
                if ($j % 2 == 0) {
                echo "<td></td>";
                } else {
                    echo "<td style='background-color: black'></td>";
                }
            }
        }
        echo "<tr>";
    }

    echo "</table>";
    ?>
</html>
