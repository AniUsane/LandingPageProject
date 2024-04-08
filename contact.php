<?php

$projects = [
    [
        'image' => 'assets/image1.svg',
        'title' => 'Project1',
        'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
         Suspendisse bibendum.',
        'info2' => 'Nunc non posuere consectetur, justo 
         erat semper enim, non hendrerit dui odio id enim.',
    ],
    [
        'image' => 'assets/image2.svg',
        'title' => 'Project2',
        'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
         Suspendisse bibendum.',
        'info2' => 'Nunc non posuere consectetur, justo 
         erat semper enim, non hendrerit dui odio id enim.',
    ],
    [
        'image' => 'assets/image3.svg',
        'title' => 'Project3',
        'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
         Suspendisse bibendum.',
        'info2' => 'Nunc non posuere consectetur, justo 
         erat semper enim, non hendrerit dui odio id enim.',
    ],
];

$posts = [
    [
        'image' => 'assets/card-image1.jfif',
        'title' => 'Lorem ipsum dolor',
        'date' => 'April 24, 2022 - 5 min read',
        'info' => 'Nunc non posuere consectetur, justo erat semper enim, non hendrerit dui odio id enim.',
    ],
    [
        'image' => 'assets/card-image2.jfif',
        'title' => 'Lorem ipsum dolor',
        'date' => 'April 03, 2022 - 4 min read',
        'info' => 'Nunc non posuere consectetur, justo erat semper enim, non hendrerit dui odio id enim.',
    ],
    [
        'image' => 'assets/card-image3.jfif',
        'title' => 'Lorem ipsum dolor',
        'date' => 'March 12, 2022 - 6 min read',
        'info' => 'Nunc non posuere consectetur, justo erat semper enim, non hendrerit dui odio id enim.',
    ],
];

function cards_loop($projects){
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
}

function posts_loop($posts){
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
}