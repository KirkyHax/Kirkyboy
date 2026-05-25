<?php
  // Updated Fruit Array with Web Image Links
  $fruits = [
    ["name" => "Blackberry", "color" => "Black/Purple", "facts" => "Blackberries are rich in vitamin C and fiber.", "image" => "https://www.gurneys.com/cdn/shop/files/80886A.webp?v=1729086281"],
    ["name" => "Coconut", "color" => "Brown/White", "facts" => "Coconuts provide healthy fats and electrolytes.", "image" => "https://www.dole.com/sites/default/files/styles/1024w768h-80/public/media/2025-01/coconut.png?itok=G0g0yyVi-4ctOzgnp"],
    ["name" => "Dragon Fruit", "color" => "Pink/White", "facts" => "Dragon fruit is high in antioxidants and vitamin C.", "image" => "https://media.post.rvohealth.io/wp-content/uploads/2024/01/A-pink-pitahaya-cut-it-in-half-Dragon-Fruit-facebook.jpg"],
    ["name" => "Durian", "color" => "Green/Yellow", "facts" => "Durian is known as the 'king of fruits' in Southeast Asia.", "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrW9GUf1HEYu_BDwWIAHmRj7rYM-ymhWVCxg&s"],
    ["name" => "Langsat (Lanzones)", "color" => "Yellow", "facts" => "Lanzones are sweet tropical fruits rich in antioxidants.", "image" => "https://images.squarespace-cdn.com/content/v1/508da03be4b0d28844ddf21c/91ae9a14-3c68-4425-8198-bfdce03aee33/Lanzones.jpg"],
    ["name" => "Lychee", "color" => "Red/White", "facts" => "Lychees are juicy fruits rich in vitamin C.", "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShw5pWbMy6OI49mIXy7PJFkC-yTXOPc_WSzQ&s"],
    ["name" => "Passion Fruit", "color" => "Purple/Yellow", "facts" => "Passion fruit is high in fiber and immune-boosting nutrients.", "image" => "https://img.lb.wbmdstatic.com/vim/live/webmd/consumer_assets/site_images/article_thumbnails/BigBead/passion_fruit_bigbead/1800x1200_passion_fruit_bigbead.jpg?resize=750px:*&output-quality=75"],
    ["name" => "Ponkan", "color" => "Orange", "facts" => "Ponkan is a sweet citrus fruit popular in Asia.", "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1K4iVFrDKuaKyxdFL1a1I5urJGLa96TXpYQ&s"],
    ["name" => "Rambutan", "color" => "Red/White", "facts" => "Rambutans are sweet and rich in vitamin C.", "image" => "https://img.lb.wbmdstatic.com/vim/live/webmd/consumer_assets/site_images/article_thumbnails/BigBead/health_benefits_of_rambutan_bigbead/1800x1200_health_benefits_of_rambutan_bigbead.jpg"],
    ["name" => "Sugar Apple", "color" => "Green/White", "facts" => "Sugar apples are creamy and rich in vitamins and minerals.", "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCmRhKSArTtkfFYuSYt5qrWaqpCwSceJ7-ug&s"]
  ];

  // Sort Alphabetically
  usort($fruits, function($a, $b) {
    return strcmp($a["name"], $b["name"]);
  });
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fruit Directory</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>🍇 Pinoys Best Local Fruits  🥥</h1>

  <table>
    <thead>
      <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Facts</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($fruits as $fruit): ?>
        <tr>
          <td><img src="<?= $fruit['image'] ?>" alt="<?= $fruit['name'] ?>"></td>
          <td><?= $fruit['name'] ?></td>
          <td>Color: <?= $fruit['color'] ?></td>
          <td class="facts"><?= $fruit['facts'] ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</body>
</html>
