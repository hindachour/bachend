<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<table border='1'>";
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 2 == 0) {
            echo "<tr><td style='background-color:red'>" . $i . "</td></tr>";
        } else {
            echo "<tr><td style='background-color:blue'>" . $i . "</td></tr>";
        }
    }
    echo "</table>";
    ?>
</body>
</html>
