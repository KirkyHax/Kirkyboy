<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>String Functions in PHP</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 2px solid #333;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #f9f9f9;
        }
        .main-header {
            font-size: 1.2em;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
// 1. Create an array with 20 different names
$names = [
    "chrisa", "john doe", "mary ann", "alexander", "elizabeth",
    "michael", "sarah connor", "david", "emily", "james bond",
    "jessica", "brian", "amanda", "kevin", "rachel",
    "oliver", "sophia", "william", "natalie", "ethan"
];
?>

<table>
    <tr>
        <th colspan="6" class="main-header">List of names</th>
    </tr>
    <tr>
        <th>Name</th>
        <th>Number of characters</th>
        <th>Uppercase first character</th>
        <th>Replace vowels with @</th>
        <th>Check position of character "a"</th>
        <th>Reverse name</th>
    </tr>
    
    <?php
    // Loop through each name and apply string functions
    foreach ($names as $name) {
        // • Number of characters (including spaces)
        $length = strlen($name);
        
        // • Change the first character of each name into uppercase
        $uppercaseFirst = ucfirst($name);
        
        // • Replace all vowels (case-insensitive) with @ symbol
        $vowelsRemoved = preg_replace('/[aeiouAEIOU]/', '@', $name);
        
        // • Check the position of letter "a" (1-based index matching the sample '5' for 'chrisa')
        // strpos finds 0-based position, so we add 1. If 'a' isn't found, it returns "Not found".
        $positionOfA = strpos(strtolower($name), 'a');
        $displayPosition = ($positionOfA !== false) ? ($positionOfA + 1) : "Not found";
        
        // • Change the name into reverse format
        $reversedName = strrev($name);
        
        // Display row
        echo "<tr>";
        echo "<td>" . htmlspecialchars($name) . "</td>";
        echo "<td>" . $length . "</td>";
        echo "<td>" . htmlspecialchars($uppercaseFirst) . "</td>";
        echo "<td>" . htmlspecialchars($vowelsRemoved) . "</td>";
        echo "<td>" . $displayPosition . "</td>";
        echo "<td>" . htmlspecialchars($reversedName) . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>