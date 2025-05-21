<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student Marks</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Add Student</h2>
    <form action="store.php" method="post">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>
        <label>Roll Number:</label><br>
        <input type="text" name="roll_number" required><br><br>
        <label>HTML Marks:</label><br>
        <input type="number" name="html_marks" required><br><br>
        <label>CSS Marks:</label><br>
        <input type="number" name="css_marks" required><br><br>
        <label>PHP Marks:</label><br>
        <input type="number" name="php_marks" required><br><br>
        <button type="submit" class="btn">Submit</button>
    </form>
    <br>
    <a href="index.php" class="btn">Back to List</a>
</body>
</html>