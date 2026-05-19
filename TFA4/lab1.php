<?php include("header.php"); ?>

<?php
$story = isset($_GET['story']) ? $_GET['story'] : 0;
?>

<div class="story-box">

<?php if ($story == 1): ?>
    <h2>Friends to the End</h2>
    <img src="Friends.jpg">
    <p>Water splashed, laughter got louder, and time slowed down. No stress, no problems, just us being stupid and happy. We held on to each other like nothing could pull us apart. Moments like this don’t last forever, but they stay. Years from now, we won’t remember every detail. But we’ll remember this feeling.</p>

<?php elseif ($story == 2): ?>
    <h2>The Solo Traveller</h2>
    <img src="Travel.jpg">
    <p>Sat with strangers, and felt at ease. No rush, no noise from anyone I knew, just me learning how to enjoy my own company. I got lost more than once, but I found more than I expected.
Confidence, peace, and a kind of freedom I never felt before. I arrived alone, but I never felt lonely.</p>

<?php elseif ($story == 3): ?>
    <h2>The Best Commute Experience</h2>
    <img src="train.jpg">
    <p>In Singapore, every ride felt smooth and on time.
In the Philippines, every trip feels slow and uncertain.

The difference is simple.
One system is managed well. The other suffers from corruption.

I saw what works. We deserve the same.</p>

<?php elseif ($story == 4): ?>
    <h2>Pickleball with friends </h2>
    <img src="pikelbol.jpg">
    <p>It's good to have friends who share your interests and make even simple activities enjoyable.</p>

<?php elseif ($story == 5): ?>
    <h2>Peace in the Flow</h2>
    <img src="float.jpg">
    <p>let the water carry me and forgot the noise.
No rush, no pressure, just calm and quiet.
For a moment, this was all I needed.</p>

<?php else: ?>
    <h2>Welcome to my Story Collection</h2>
    <p>Select a story below.</p>
<?php endif; ?>

</div>

<div class="nav">
    <a href="lab1.php?story=1">Story 1</a>
    <a href="lab1.php?story=2">Story 2</a>
    <a href="lab1.php?story=3">Story 3</a>
    <a href="lab1.php?story=4">Story 4</a>
    <a href="lab1.php?story=5">Story 5</a>
</div>

<?php require("footer.php"); ?>