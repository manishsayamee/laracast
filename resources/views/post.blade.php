<!doctype >
<title>My post</title>
<link rel="stylesheet" href='/css/app.css'>

<body>

    <article>
        <h1><?= $post->title; ?></h1>
        

        <div>
            <?= $post->body; ?>
        </div>
    </article>

    
    <a href='/' >Go Back</a>


</body>