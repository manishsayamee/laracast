<!doctype >
<title>My post</title>
<link rel="stylesheet" href='/css/app.css'>

<body>
<?php foreach ($posts as $post) : ?>

    <article>
        <a href='/posts/<?= $post->slug ?>'><h1><?= $post->title; ?></h1></a>

        
    </article>
<?php endforeach; ?>

    


</body>