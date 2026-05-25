<?php require("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $fullName; ?></title>
<link rel="stylesheet" href="style3.css">
</head>
<body>

<div class="container">
<header class="header-flex">

<div class="profile">
<img src="https://scontent-dfw6-1.xx.fbcdn.net/v/t39.30808-6/362608997_6455888854525419_2609916420693215832_n.jpg?stp=cp6_dst-jpg_tt6&_nc_cat=102&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeFlSFk0NoV0dVxD8v4Bkj48FAnnWG0IouYUCedYbQii5oUXH1KwcmlmI0JPZdjPItH0hq2fXWv-MdT1Wro5luud&_nc_ohc=bwYPi4xGa-AQ7kNvwEiXgGt&_nc_oc=Adr6emKVW7P3VQV82gn4QOazwIOK5wMmHAcC1ogP654FEbk8ZHfgcHGBHLnzrZb5Yp8&_nc_zt=23&_nc_ht=scontent-dfw6-1.xx&_nc_gid=aDFNYs-hPHe9mLWE-0Ke-Q&_nc_ss=7d2a8&oh=00_Af4EfOfyJtf5wmlfiA-ryk4JtkYus0Mc5SLczvmqAjHKIg&oe=6A19DE6E" alt="Profile Picture">
</div>

<div class="header-text">
<h1><?php echo $fullName; ?></h1>
<p><?php echo $jobTitle; ?></p>
</div>

</header>