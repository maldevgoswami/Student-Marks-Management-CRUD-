<?php
include 'config.php';
if (isset($_GET['id'])) {
    $stmt = $pdo->prepare("DELETE FROM student WHERE id = ?");
    $stmt->execute([(int)$_GET['id']]);
}
header('Location: index.php');
?>