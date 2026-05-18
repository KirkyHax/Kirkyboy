<?php
// 1. Define the User-Defined Function
function calculateThreeParameters($param1, $param2, $param3) {
    // Addition: Add all values
    $addition = $param1 + $param2 + $param3;

    // Subtraction: Subtract sequentially from left to right
    $subtraction = $param1 - $param2 - $param3;

    // Multiplication: Multiply all values
    $multiplication = $param1 * $param2 * $param3;

    // Division: Divide sequentially from left to right
    // Prevents error if division by zero occurs
    if ($param2 != 0 && $param3 != 0) {
        $division = $param1 / $param2 / $param3;
    } else {
        $division = "Undefined (Division by Zero)";
    }

    // Return results inside an associative array
    return [
        'addition'       => $addition,
        'subtraction'    => $subtraction,
        'multiplication' => $multiplication,
        'division'       => $division
    ];
}

// 2. Call the function with the sample values from the image
$p1 = 2;
$p2 = 15;
$p3 = 2004;

$results = calculateThreeParameters($p1, $p2, $p3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Function Parameters</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

    <h2>My Birthday Value</h2>
    <table>
        <tr>
            <td colspan="2">My Parameter values: <?php echo "$p1, $p2, $p3"; ?></td>
        </tr>
        <tr>
            <td>Addition</td>
            <td><?php echo $results['addition']; ?></td>
        </tr>
        <tr>
            <td>Subtraction</td>
            <td><?php echo $results['subtraction']; ?></td>
        </tr>
        <tr>
            <td>Multiplication</td>
            <td><?php echo $results['multiplication']; ?></td>
        </tr>
        <tr>
            <td>Division</td>
            <td><?php echo $results['division']; ?></td>
        </tr>
    </table>

</body>
</html>