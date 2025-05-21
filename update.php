<?php
include 'config.php';
if (isset(
    $_POST['id'], $_POST['name'], $_POST['roll_number'],
    $_POST['html_marks'], $_POST['css_marks'], $_POST['php_marks']
)) {
    $stmt = $pdo->prepare(
        "UPDATE student SET name=?, roll_number=?, html_marks=?, css_marks=?, php_marks=? WHERE id=?"
    );
    $stmt->execute([
        $_POST['name'], $_POST['roll_number'],
        $_POST['html_marks'], $_POST['css_marks'], $_POST['php_marks'],
        $_POST['id']
    ]);
}
header('Location: index.php');
?>