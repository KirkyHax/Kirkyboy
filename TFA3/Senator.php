<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        
        h2 {
            margin-bottom: 20px;
        }

       
        table {
            border-collapse: separate;
            border-spacing: 2px;
            border: 2px solid #888888;
            width: 100%;
            max-width: 900px;
        }

        th, td {
            border: 1px solid #888888;
            padding: 15px;
            text-align: center;
            vertical-align: middle;
            font-size: 14px;
        }

        th {
            background-color: #ffffff;
            font-weight: normal;
        }

       
        .profile-img {
            width: 80px;
            height: 80px;
            object-fit: cover; 
            display: block;
            margin: 0 auto;
            border-radius: 4px; 
        }
    </style>
</head>
<body>

    <h2>LISTAHAN NG KORAP AT WALANG SILBI</h2>

    <?php
    // 1. Multidimensional array containing 10 different records
    $contacts = [
        ["name" => "Bato Dela Rosa",  "image" => "bato.png", "age" => "54", "birthday" => "October 12, 2001",   "contact" => "The Hague prison                        +31 (0)70 515 8515"],
        ["name" => "Chiz Escudero",  "image" => "Chiz.png",   "age" => "55", "birthday" => "January 15, 2004",   "contact" => "091728344"],
        ["name" => "Alan Peter Cayetano",  "image" => "Cayetano.png", "age" => "51", "birthday" => "March 22, 2001",     "contact" => "092238475"],
        ["name" => "Imee Marcos",    "image" => "imee.jpg",   "age" => "60", "birthday" => "July 09, 2004",      "contact" => "090598712"],
        ["name" => "Robin Padilla",   "image" => "robin.jpg",   "age" => "54", "birthday" => "December 03, 1995",  "contact" => "094483721"],
        ["name" => "Ferdinand Martin Gomez Romualdez Sr","image" => "martin.png",  "age" => "52", "birthday" => "May 17, 2006",       "contact" => "091933485"],
        ["name" => "Ferdinand Bongbong Romualdez Marcos Jr",   "image" => "BBM.JPEG",   "age" => "68", "birthday" => "September 13, 1957", "contact" => "0967676767"],
        ["name" => "Rodante Dizon Marcoleta","image" => "marcolekta.png",  "age" => "67", "birthday" => "April 05, 2003",     "contact" => "093588123"],
        ["name" => "Sara Zimmerman Duterte-Carpio",  "image" => "sara.jpg",  "age" => "47", "birthday" => "May 31, 1978",       "contact" => "(632) 8532-5942"],
        ["name" => "Rodrigo Roa Duterte",    "image" => "duterte.jpg",   "age" => "81", "birthday" => "March 28, 1945",  "contact" => "The Hague prison                +31 (0)70 515 8515"]
    ];

    // 2. Alphabetical sorting by the 'name' key using usort
    usort($contacts, function($a, $b) {
        return strcmp($a['name'], $b['name']);
    });
    ?>

    <table>
        <thead>
            <tr>
                <th>no.</th>
                <th>name</th>
                <th>Image</th>
                <th>age</th>
                <th>birthday</th>
                <th>contact number</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $counter = 1; 
            foreach ($contacts as $contact): 
            ?>
                <tr>
                    <td><?php echo $counter++; ?></td>
                    <td><?php echo htmlspecialchars($contact['name']); ?></td>
                    <td>
                        <img src="<?php echo htmlspecialchars($contact['image']); ?>" class="profile-img" alt="<?php echo htmlspecialchars($contact['name']); ?>'s photo">
                    </td>
                    <td>age <?php echo htmlspecialchars($contact['age']); ?></td>
                    <td>birthday <?php echo htmlspecialchars($contact['birthday']); ?></td>
                    <td><?php echo htmlspecialchars($contact['contact']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>