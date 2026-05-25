<?php include(__DIR__ . "/header.php"); ?>

<?php
$story = isset($_GET['story']) ? $_GET['story'] : 0;
?>

<div class="story-box">

<?php if ($story == 1): ?>
    <h2>The Lost Key</h2>
    <img src="images/story1.jpg">
    <p>I found a rusty key near my door. I tried it on every lock. One door opened. Inside, I saw a hidden room waiting for me.</p>

<?php elseif ($story == 2): ?>
    <h2>The Last Train</h2>
    <img src="images/story2.jpg">
    <p>I rushed to catch the last train. The station was empty. The train moved even without a driver.</p>

<?php elseif ($story == 3): ?>
    <h2>The Silent Phone</h2>
    <img src="images/story3.jpg">
    <p>My phone rang at midnight. No voice answered. Then a message appeared. Do not look behind you.</p>

<?php elseif ($story == 4): ?>
    <h2>The Hidden Path</h2>
    <img src="images/story4.jpg">
    <p>I followed a narrow path in the forest. It led to a place not shown on any map.</p>

<?php elseif ($story == 5): ?>
    <h2>The Old Clock</h2>
    <img src="images/story5.jpg">
    <p>An old clock stopped at midnight. Time around me slowed down. I realized the clock controlled everything.</p>

<?php else: ?>
    <h2>Welcome to my Story Collection</h2>
    <p>Select a story below.</p>
<?php endif; ?>

</div>

<div class="nav">
    <a href="LABORATORY ACTIVITY TASK 1.php?story=1">Story 1</a>
    <a href="LABORATORY ACTIVITY TASK 1.php?story=2">Story 2</a>
    <a href="LABORATORY ACTIVITY TASK 1.php?story=3">Story 3</a>
    <a href="LABORATORY ACTIVITY TASK 1.php?story=4">Story 4</a>
    <a href="LABORATORY ACTIVITY TASK 1.php?story=5">Story 5</a>
</div>

<?php require(__DIR__ . "/footer.php"); ?>