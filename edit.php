<?php
include 'config.php';
if (!isset($_GET['id'])) header('Location: index.php');
$id = (int)$_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM student WHERE id = ?");
$stmt->execute([$id]);
$student = $stmt->fetch();
if (!$student) header('Location: index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Edit Student</h2>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $student['id'] ?>">
        <label>Name</label><br>
        <input type="text" name="name" value="<?= htmlspecialchars($student['name']) ?>" required><br><br>
        <label>Roll Number</label><br>
        <input type="text" name="roll_number" value="<?= htmlspecialchars($student['roll_number']) ?>" required><br><br>
        <label>HTML Marks</label><br>
        <input type="number" name="html_marks" value="<?= $student['html_marks'] ?>" required><br><br>
        <label>CSS Marks</label><br>
        <input type="number" name="css_marks" value="<?= $student['css_marks'] ?>" required><br><br>
        <label>PHP Marks</label><br>
        <input type="number" name="php_marks" value="<?= $student['php_marks'] ?>" required><br><br>
        <button type="submit" class="btn btn-edit">Update</button>
    </form>
    <br><a href="index.php" class="btn">Back to List</a>
</body>
</html>