<?php include("header.php"); ?>
<?php include("nav.php"); ?>

<div class="content">
<?php
$page = $_GET['page'] ?? "career";

switch($page){
    case "career":
        include("career.php");
        break;
    case "personal":
        include("personal.php");
        break;
    case "education":
        include("education.php");
        break;
    case "skills":
        include("skills.php");
        break;
    case "affiliation":
        include("affiliation.php");
        break;
    case "experience":
        include("experience.php");
        break;
    default:
        echo "<h2>Page not found</h2>";
}
?>
</div>

<?php include("footer.php"); ?>