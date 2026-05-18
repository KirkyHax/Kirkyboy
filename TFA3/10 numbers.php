<?php
// 1. Initialize the array with the 10 numbers from the sample output
// Note: The sample image shows 9 numbers explicitly (missing 9), 
// but we will stick to a 10-digit sequence to fulfill the 10-number requirement.
$numbers = [69, 67, 420, 17, 38, 21, 9, 10, 24, 5];

// 2. Perform Calculations
// Addition: Start at 0 and add each number
$sum = array_sum($numbers);

// Multiplication: Start at 1 and multiply each number
$product = array_product($numbers);

// Subtraction & Division: 
// For sequential operations, we start with the first element and apply the rest.
$difference = $numbers[0];
$quotient = $numbers[0];

for ($i = 1; $i < count($numbers); $i++) {
    $difference -= $numbers[$i];
    $quotient /= $numbers[$i];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Operations</title>
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

    <h2>My Table</table></h2>
    <table>
        <tr>
            <td colspan="2">Array list: <?php echo implode(', ', $numbers); ?></td>
        </tr>
        <tr>
            <td>Addition</td>
            <td><?php echo $sum; ?></td>
        </tr>
        <tr>
            <td>Subtraction</td>
            <td><?php echo $difference; ?></td>
        </tr>
        <tr>
            <td>Multiplication</td>
            <td><?php echo $product; ?></td>
        </tr>
        <tr>
            <td>Division</td>
            <td><?php echo strtoupper(sprintf('%E', $quotient)); ?></td>
        </tr>
    </table>

</body>
</html>