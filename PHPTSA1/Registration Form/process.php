<?php
// Retrieve and Sanitize
$fullname = ucwords(strtolower($_POST['fullname']));
$email = strtolower($_POST['email']);
$gender = $_POST['gender'];
$civil_status = $_POST['civil_status'];
$dob = date("F d, Y", strtotime($_POST['dob']));

$student_no = $_POST['student_no'];
$grade = "Grade " . $_POST['grade'];
$section = strtoupper($_POST['section']);
$scholarship = $_POST['scholarship'];

$grade_school = ucwords(strtolower($_POST['grade_school']));
$high_school = ucwords(strtolower($_POST['high_school']));
$senior_high = ucwords(strtolower($_POST['senior_high']));

$em_name = ucwords(strtolower($_POST['em_name']));
$em_relation = ucwords(strtolower($_POST['em_relation']));
$em_phone = $_POST['em_phone'];

$city = ucwords(strtolower($_POST['city']));
$country = strtoupper($_POST['country']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Confirmation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div style="text-align: center; margin-bottom: 20px;">
        <div style="color: #4f46e5; font-size: 3rem; margin-bottom: 10px;">✓</div>
        <h2>Registration Successful</h2>
        <p style="color: var(--text-muted);">Please review the details recorded in our system.</p>
    </div>

    <h3>Student Profile</h3>
    <div class="info-row"><span class="info-label">Full Name</span> <span class="info-value"><?php echo $fullname; ?></span></div>
    <div class="info-row"><span class="info-label">Email</span> <span class="info-value"><?php echo $email; ?></span></div>
    <div class="info-row"><span class="info-label">Gender</span> <span class="info-value"><?php echo $gender; ?></span></div>
    <div class="info-row"><span class="info-label">Status</span> <span class="info-value"><?php echo $civil_status; ?></span></div>
    <div class="info-row"><span class="info-label">Birthday</span> <span class="info-value"><?php echo $dob; ?></span></div>

    <h3>Academic Details</h3>
    <div class="info-row"><span class="info-label">Student ID</span> <span class="info-value"><?php echo $student_no; ?></span></div>
    <div class="info-row"><span class="info-label">Level</span> <span class="info-value"><?php echo $grade; ?></span></div>
    <div class="info-row"><span class="info-label">Section</span> <span class="info-value"><?php echo $section; ?></span></div>
    <div class="info-row"><span class="info-label">Scholarship</span> <span class="info-value"><?php echo $scholarship; ?></span></div>

    <h3>Emergency Contact</h3>
    <div class="info-row"><span class="info-label">Contact Name</span> <span class="info-value"><?php echo $em_name; ?></span></div>
    <div class="info-row"><span class="info-label">Relationship</span> <span class="info-value"><?php echo $em_relation; ?></span></div>
    <div class="info-row"><span class="info-label">Phone</span> <span class="info-value"><?php echo $em_phone; ?></span></div>

    <h3>Location</h3>
    <div class="info-row"><span class="info-label">City</span> <span class="info-value"><?php echo $city; ?></span></div>
    <div class="info-row"><span class="info-label">Country</span> <span class="info-value"><?php echo $country; ?></span></div>

    <button onclick="window.print()" style="background: #64748b; margin-top: 30px;">Print Record</button>
    <p style="text-align: center; margin-top: 20px;">
        <a href="index.php" style="color: var(--primary); text-decoration: none; font-weight: 500;">← Register another student</a>
    </p>
</div>

</body>
</html>