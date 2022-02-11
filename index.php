<?php
    include 'logic.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sudip Bashyal</title>
    <link rel="stylesheet" href="Css/style.css">
    <link rel="shortcut icon" href="Images/Icon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;800&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <img src="Images/SudipBashyalLogo.png" alt="" class="nav-logo">
        <div class="link-container">
            <a href="https://github.com/sudipbash/" target="_blank" id="nav-link-medium" class="nav-link">GITHUB</a>
            <p class="link-info">Visit my github profile to find amazing projects.</p>
        </div>
    </nav>

    <?php if(isset($_REQUEST['info'])){?>
        <?php if($_REQUEST['info']=='added'){?>
            <span class="alert">Successfully Published.</span>
        <?php }?>
    <?php }?>

    <section class="article-container">
        <?php foreach($query as $q) {?>
            <div class="article">
            <h1 class="article-heading"><?php echo $q['title'];?></h1>
            <p class="article-category"><?php echo $q['tag'];?></p>
            <p class="article-text"><?php echo $q['content'];?></p>
        </div>
        <?php }?>
        
    </section>
</body>
</html>