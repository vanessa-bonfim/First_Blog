<?php

require_once 'head.php'; 
require_once 'config.php';

$query = 'SELECT * FROM posts';
$sql = $pdo->prepare($query);

if ($sql->execute()) {
    $posts = $sql->fetchAll(PDO::FETCH_ASSOC);
} else {
    $posts = [];
}

?>

<div class="page container">
    <section>
        <h3>Latest Posts</h3>

        <?php foreach ($posts as $post) : ?>

        <div class="news">
            <div class="content">
                <h2><?php echo $post['title'] ?></h2>
                <p><?php echo $post['content'] ?></p>                
            </div>
            <p>Autor: <span class="author"><?php echo $post['author'] ?></span></p>
            <p>Created Date: <span class="date"><?php echo $post['created_at'] ?></span></p>
            <p>Updated Date: <span class="date"><?php echo $post['updated_at'] ?></span></p>
            <div class="blog-action flex flex-end">
                <a href="blog-update.php?id=<?php echo $post['id'] ?>">Editar</a> |
                <a onclick="return confirm('Tem certeza?');" href="blog-delete.php?id=<?php echo $post['id'] ?>">Apagar</a>
            </div>
        </div>

        <?php endforeach ?>
        
    </section>
</div>

<?php

require_once 'foot.php';