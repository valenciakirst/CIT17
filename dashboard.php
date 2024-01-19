<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Information System</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<h2>Student Information System</h2>

<div class="topnav">
    <a href="javascript:void(0);" class="tablinks" onclick="openTab(event, 'students')">Students</a>
    <a href="javascript:void(0);" class="tablinks" onclick="openTab(event, 'users')">Users</a>
    <a href="javascript:void(0);" class="tablinks" onclick="openTab(event, 'courses')">Courses</a>
    <a href="javascript:void(0);" class="tablinks" onclick="openTab(event, 'instructors')">Instructors</a>
</div>

<section id="students" class="tabcontent">
    <?php include 'students.php'; ?>
</section>

<section id="users" class="tabcontent">
    <?php include 'users.php'; ?>
</section>

<section id="courses" class="tabcontent">
    <?php include 'course.php'; ?>
</section>

<section id="instructors" class="tabcontent">
    <?php include 'instructor.php'; ?>
</section>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="script.js"></script>

</body>
</html>
