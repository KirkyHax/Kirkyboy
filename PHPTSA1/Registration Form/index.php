<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Student Registration</h2>

    <form method="POST" action="process.php">
        <h3>Personal Information</h3>
        
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="fullname" placeholder="Enter full name" required>
        </div>

        <div class="form-group">
            <label>Email Address</label>
            <input type="email" name="email" placeholder="example@school.edu" required>
        </div>

        <div class="form-group">
            <label>Gender</label>
            <select name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>

        <div class="form-group">
            <label>Civil Status</label>
            <div class="radio-group">
                <label class="radio-option"><input type="radio" name="civil_status" value="Single" required> Single</label>
                <label class="radio-option"><input type="radio" name="civil_status" value="Married"> Married</label>
            </div>
        </div>

        <div class="form-group">
            <label>Date of Birth</label>
            <input type="date" name="dob" required>
        </div>

        <h3>Academic Information</h3>

        <div class="form-group">
            <label>Student Number</label>
            <input type="number" name="student_no" required>
        </div>

        <div class="form-group">
            <label>Grade Level</label>
            <select name="grade">
                <option value="7">Grade 7</option>
                <option value="8">Grade 8</option>
                <option value="9">Grade 9</option>
                <option value="10">Grade 10</option>
                <option value="11">Grade 11</option>
                <option value="12">Grade 12</option>
            </select>
        </div>

        <div class="form-group">
            <label>Section</label>
            <input type="text" name="section" placeholder="e.g. ICT-1">
        </div>

        <div class="form-group">
            <label>Scholarship Status</label>
            <select name="scholarship">
                <option value="None">None</option>
                <option value="Partial">Partial</option>
                <option value="Full">Full</option>
            </select>
        </div>

        <h3>Educational Background</h3>

        <div class="form-group">
            <label>Grade School</label>
            <input type="text" name="grade_school">
        </div>

        <div class="form-group">
            <label>High School</label>
            <input type="text" name="high_school">
        </div>

        <div class="form-group">
            <label>Senior High School</label>
            <input type="text" name="senior_high">
        </div>

        <h3>Emergency Contact</h3>

        <div class="form-group">
            <label>Contact Name</label>
            <input type="text" name="em_name">
        </div>

        <div class="form-group">
            <label>Relationship</label>
            <input type="text" name="em_relation">
        </div>

        <div class="form-group">
            <label>Contact Number</label>
            <input type="text" name="em_phone">
        </div>

        <h3>Address</h3>

        <div class="form-group">
            <label>City</label>
            <input type="text" name="city">
        </div>

        <div class="form-group">
            <label>Country</label>
            <input type="text" name="country">
        </div>

        <button type="submit">Submit Registration</button>
    </form>
</div>

</body>
</html>