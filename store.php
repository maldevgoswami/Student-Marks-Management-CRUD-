<?php
include 'config.php';
if (isset($_POST['name'], $_POST['roll_number'],
          $_POST['html_marks'], $_POST['css_marks'], $_POST['php_marks'])) {
    $stmt = $pdo->prepare(
        "INSERT INTO student (name, roll_number, html_marks, css_marks, php_marks)
         VALUES (?, ?, ?, ?, ?)"
    );
    $stmt->execute([
        $_POST['name'], $_POST['roll_number'],
        $_POST['html_marks'], $_POST['css_marks'], $_POST['php_marks']
    ]);
}
header('Location: index.php');
?>