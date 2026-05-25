<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Volume of Shapes</title>
  <link rel="stylesheet" href="style2.css">
</head>
<body>

  <h1>📐 Volume of Shapes</h1>

  <?php
    // User-defined functions for each shape
    function volumeCube($s) {
      return pow($s, 3);
    }

    function volumeRectangularPrism($l, $w, $h) {
      return $l * $w * $h;
    }

    function volumeCylinder($r, $h) {
      return M_PI * pow($r, 2) * $h;
    }

    function volumeCone($r, $h) {
      return (1/3) * M_PI * pow($r, 2) * $h;
    }

    function volumeSphere($r) {
      return (4/3) * M_PI * pow($r, 3);
    }

    // Sample values
    $s = 5;
    $l = 4; $w = 3; $h = 6;
    $r = 3; $hCyl = 7; $hCone = 9;

    // Calculations
    $cube = volumeCube($s);
    $rectPrism = volumeRectangularPrism($l, $w, $h);
    $cylinder = volumeCylinder($r, $hCyl);
    $cone = volumeCone($r, $hCone);
    $sphere = volumeSphere($r);
  ?>

  <table>
    <thead>
      <tr>
        <th>Shape</th>
        <th>Values</th>
        <th>Formula</th>
        <th>Answer</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Cube</td>
        <td>s = <?= $s ?></td>
        <td>V = s³</td>
        <td><?= number_format($cube, 2) ?></td>
      </tr>
      <tr>
        <td>Rectangular Prism</td>
        <td>l = <?= $l ?>, w = <?= $w ?>, h = <?= $h ?></td>
        <td>V = l × w × h</td>
        <td><?= number_format($rectPrism, 2) ?></td>
      </tr>
      <tr>
        <td>Cylinder</td>
        <td>r = <?= $r ?>, h = <?= $hCyl ?></td>
        <td>V = πr²h</td>
        <td><?= number_format($cylinder, 2) ?></td>
      </tr>
      <tr>
        <td>Cone</td>
        <td>r = <?= $r ?>, h = <?= $hCone ?></td>
        <td>V = (1/3)πr²h</td>
        <td><?= number_format($cone, 2) ?></td>
      </tr>
      <tr>
        <td>Sphere</td>
        <td>r = <?= $r ?></td>
        <td>V = (4/3)πr³</td>
        <td><?= number_format($sphere, 2) ?></td>
      </tr>
    </tbody>
  </table>

</body>
</html>
