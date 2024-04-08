<?php

$categories = [
    [
        'link' => '/blog',
        'name' => 'Blog',
        'children' => [
            [
                'link' => '/1',
                'name' => 'Daily Blogs',
            ],
            [
                'link' => '/2',
                'name' => 'Food Blogs',
            ],
            [
                'link' => '/3',
                'name' => 'Lifestyle Blogs',
            ],
        ]
    ],
    [
        'link' => '/newsletter',
        'name' => 'Newsletter',
        'children' => [],
    ],
    [
        'link' => '/Twitter',
        'name' => 'Twitter',
        'children' => [],
    ],

];

function categories_loop($categories){
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
}