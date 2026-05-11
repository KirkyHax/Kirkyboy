<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Multiplication Table</h1>

<div class="table">
<?php
for ($row = 0; $row <= 10; $row++) {
    for ($col = 0; $col <= 10; $col++) {

        $value = $row * $col;

        // pink and green alternating
        if (($row + $col) % 2 == 0) {
            $color = "#A47DAB"; // PLUM
        } else {
            $color = "#DE73FF"; // green
        }

        echo "<div class='cell' style='background:$color;'>$value</div>";
    }
}
?>
</div>

</body>
</html>