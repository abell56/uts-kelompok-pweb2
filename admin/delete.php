<?php
include 'db.php';
$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM faskes WHERE id = ?");
$stmt->execute([$id]);
header("Location: dashboard.php");
exit();
?>