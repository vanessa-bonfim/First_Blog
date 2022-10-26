<?php

require_once 'config.php';
require_once 'head.php';

if (empty($_GET['id']) || !(int)($_GET['id'])) {
    echo "<script>alert('Verifique se esta publicação existe!');";
    echo "javascript:window.location='blog-read.php';</script>";
}

if (
    !empty($_POST['title']) &&
    !empty($_POST['author']) &&
    !empty($_POST['created_at']) &&
    !empty($_POST['updated_at']) &&
    !empty($_POST['content'])
) {

    $updatedAt = date('Y-m-d H:i:s');
    $query = 'UPDATE posts SET title = ?, author = ?, created_at = ?, updated_at = ?, content = ? WHERE id = ?';
    $sql = $pdo->prepare($query);

    if ($sql->execute([
        $_POST['title'],
        $_POST['author'],
        $_POST['created_at'],
        $updatedAt,
        $_POST['content'],
        $_GET['id']
    ])) {

        echo "<script>alert('Publicação Atualizada!');</script>";
    } else {
        echo "<script>alert('Publicação não encontrada!');</script>";
    }

    echo "<script>javascript:window.location='blog-read.php';</script>";
} else {
    $query = 'SELECT * FROM posts WHERE id = ?';
    $sql = $pdo->prepare($query);

    if ($sql->execute([$_GET['id']])) {
        $update_post = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        $update_post = [];
    }
}

?>

<div class="page container">
    <section>
        <h3>Update - Post</h3>
        <form class="form" method="POST" action="blog-update.php?id=<?php echo $update_post['id'] ?>">
            <div class="form-field">
                <label for="">Título</label>
                <input type="text" name="title" value="<?php echo $update_post['title'] ?>">
            </div>
            <div class="form-field">
                <label for="">Autor</label>
                <input type="text" name="author" value="<?php echo $update_post['author'] ?>">
            </div>
            <div class="form-field">
                <label for="created_at">Data de Criação</label>
                <input type="text" id="datepicker" name="created_at" value="<?php echo $update_post['created_at'] ?>">
            </div>
            <div class="form-field">
                <label for="created_at">Data de Atualização</label>
                <input type="text" id="datepicker" name="updated_at" value="<?php echo $update_post['updated_at'] ?>">
            </div>
            <div class="form-field">
                <label for="content">Conteúdo</label>
                <textarea name="content" cols="30" rows="10"><?php echo $update_post['content'] ?></textarea>
            </div>
            <div class="form-field">
                <button>Guardar</button>
            </div>
        </form>
    </section>
</div>

<?php

require_once 'foot.php';
