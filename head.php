<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - CodeMaster</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/blog.css">
</head>

<body>
    <header>
        <nav class="menu container flex flex-align-items-center flex-space-between">
            <h2><a href="blog-read.php">Blog - CodeMaster</a></h2>
            <ul class="menu-list flex">
                <li>
                    <a href="blog-read.php">News</a>
                </li>
                <li>
                    <a href="blog-read.php">Politics</a>
                </li>
                <li>
                    <a href="blog-read.php">Sport</a>
                </li>
            </ul>
        </nav>

        <div class="banners container">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <h5 class="text-center">
                <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./public/images/banner-1.jpg" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="./public/images/banner-2.jpg" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="./public/images/banner-3.jpg" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="./public/images/banner-4.jpg" class="d-block w-100" alt="">
                        </div>                        
                    </div>
                </h5>
            </div>
        </div>
    </header>

    <div class="page container new-blog flex flex-end">
        <a href="blog-create.php">Nova publicação</a>
    </div>