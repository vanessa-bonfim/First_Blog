<?php

require_once 'config.php';

if (empty($_GET['id']) || !(int)($_GET['id'])) {
        echo "<script>alert('Publicação não identificada!');";
        echo "javascript:window.location='blog-read.php';</script>";
}

$query = 'DELETE FROM posts WHERE id = ?';

$sql = $pdo->prepare($query);

if ($sql->execute([$_GET['id']])) {
        echo "<script>alert('Publicação Excluida!');</script>";
        
} else {
        echo "<script>alert('Não foi possível identificar esta publicação!');</script>";
        
}

echo "<script>javascript:window.location='blog-read.php';</script>";
