<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <?php include 'contact.php'; ?>
    <?php include 'header_nav.php'; ?>
</head>
<body>
    <header>
        <div class="header">
            <div>
                <img class="logo" src="assets/logo.svg" alt="logo">
            </div>
            <div>
                <nav>
                    <ul class="navigation">
                        <?php
                            foreach ($categories as $category){
                                echo '<li class="category">
                                        <a href= "' . $category['link'] . '" > ' . $category['name'] . ' </a>
                                        <ul class = "subcategory">';
                                             
                                        foreach($category['children'] as $subcategory){
                                            echo '<li class="subcategory>
                                            <a href= "' . $subcategory['link'] . '" > ' . $subcategory['name'] . ' </a>
                                            ';
                                        }

                                        echo '</ul>
                                    </li>';
                            }
                        ?>
                        
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <section>
        <div class = "main-container">
            <div>
                <h1>
                    Recent <span>Projects</span>
                </h1>
            </div>
                
            <div class="large-cards">

                <?php 
                
                    foreach($projects as $project){

                        echo '  <div class="container2">
                                    <div class="single-large-card">
                                        <div class = "image-div">
                                            <img class = "large-card-image" src="' . $project['image'] . '" alt="card-image">
                                        </div>
                                        
                                        <div class="large-cards-text">
                                            <h2> ' . $project['title'] . ' </h2>
                                            <p class="paragraph"> ' . $project['info'] . ' </p>
                                            <p class="paragraph"> ' . $project['info2'] . ' </p>
                                        </div>
                                    </div>
                                </div>';

                    }

                ?>
                
            </div>

            <h1>Latest <span>Posts</span></h2>
            <div class="all-cards">                
                <?php
                    foreach($posts as $post){
                        echo '<div class = "single-card">
                                <div class = "cards-image">
                                    <img class = "image" src="' . $post['image'] . '" alt="card-image">
                                </div>
                                <div class = "cards-text">
                                    <h4> ' . $post['title'] . ' </h4>
                                    <h5> ' . $post['date'] . ' </h5>
                                    <p class = "inside-card-text"> ' . $post['info'] . ' </p>
                                </div>
                            </div>';
                    }
                ?>

            </div>    
        </div>        
    </section>
    <hr>
    <footer>
        <div class="footer">
            <div>
                <p class="copyright">
                    © Copyright 2022  All rights reserved
                </p>
            </div>
            <div class = "social-icons">
                <a class="icon" href="#">
                    <img class = "icon-image" src="assets/Frame1.svg" alt="icon">
                </a>
                <a href="#">
                    <img class = "icon-image" src="assets/Frame2.svg" alt="icon">
                </a>
                <a href="#">
                    <img class = "icon-image" src="assets/Frame3.svg" alt="icon">
                </a>
            </div>
        </div>
    </footer>
</body>
</html>