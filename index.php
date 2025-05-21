<?php
include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Marks List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Student Marks List</h2>
    <a href="add.php" class="btn">Add New</a><br><br>
    <table>
        <tr>
            <th>ID</th><th>Name</th><th>Roll No</th>
            <th>HTML</th><th>CSS</th><th>PHP</th>
            <th>Total</th><th>Percentage</th><th>Actions</th>
        </tr>
        <?php
        $stmt = $pdo->query("SELECT * FROM student");
        while ($row = $stmt->fetch()):
        ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['roll_number']) ?></td>
            <td><?= $row['html_marks'] ?></td>
            <td><?= $row['css_marks'] ?></td>
            <td><?= $row['php_marks'] ?></td>
            <td><?= $row['total_marks'] ?></td>
            <td><?= $row['percentage'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-edit">Edit</a>
                <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-delete" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>