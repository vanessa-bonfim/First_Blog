<?php
require_once 'config.php';
require_once 'head.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST' &&
    (empty($_POST['title']) ||
     empty($_POST['author']) ||
     empty($_POST['content']) ||
     empty($_POST['created_at']) )) {
    
        echo "<script>alert('Preencha todos os campos!');";
        echo "javascript:window.location='blog-create.php';</script>"; 

}

if (!empty($_POST['title']) &&
    !empty($_POST['author']) &&
    !empty($_POST['content']) &&
    !empty($_POST['created_at']) ){
        
        /* $createdAt = date('Y-m-d H:i:s'); */
        $query = 'INSERT INTO posts (title, author, content, created_at) VALUES (?, ?, ?, ?)';
        $sql = $pdo->prepare($query);

        if ($sql->execute([ $_POST['title'], $_POST['author'], $_POST['content'], $_POST['created_at'] ]) ){
            echo "<script>alert('Publicação criada com sucesso!');";
            echo "javascript:window.location='blog-read.php';</script>";
        }else{
            echo "<script>alert('Não foi possivel fazer a publicação!');";
            echo "javascript:window.location='blog-create.php';</script>";
        }
        
}

?>

<div class="page container">
    <section>
        <h3>Create - Post</h3>
        <form class="form" method="POST" action="blog-create.php">
            <div class="form-field">
                <label for="">Título</label>
                <input type="text" name="title">
            </div>
            <div class="form-field">
                <label for="">Autor</label>
                <input type="text" name="author">
            </div>
            <div class="form-field">
                <label for="created_at">Data de Criação</label>
                <input type="text" id="datepicker" name="created_at">
            </div>
            <div class="form-field">
                <label for="created_at">Conteúdo</label>
                <textarea id="editor" name="content" cols="30" rows="10"></textarea>
            </div>
            <div class="form-field">
                <button>Guardar</button>
            </div>
        </form>
    </section>
</div>


<?php


require_once 'foot.php';