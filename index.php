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
    <section class="portfolio">
        <div class="info1">
            <p class="nav-link info2-label">DEVELOPER / DESIGNER</p>
            <h1 class="info-title">LOVING INTERCONNECTION OF 0 AND 1.</h1>
            <p class="info-desc margin-bottom">Chilling with code, mostly, friend of bugs. Nevertheless, I come up with a silly mistake of sight. Active on GItHub. Learning bit by bit not GigaByte. This is it, me.  😄</p>
            <button class="articles-btn" onclick="location.href='articles.php'">Read My Articles</button>
        </div>
        <img src="Images/portfolio-img.png" alt="" class="portfolio-img">
        <div class="info2">
            <div class="info margin-bottom">
                <p class="nav-link info2-label">SKILLS</p>
                <div class="skills">
                    <img src="Images/skill-dart.svg" alt="" class="skill-img">
                    <img src="Images/skill-html.svg" alt="" class="skill-img">
                    <img src="Images/skill-css.svg" alt="" class="skill-img">
                    <img src="Images/skill-js.svg" alt="" class="skill-img">
                    <img src="Images/skill-figma.svg" alt="" class="skill-img">
                </div>
            </div>
            <div class="info margin-bottom">
                <p class="nav-link info2-label">ACADEMIC</p>
                <h2 class="sub-title">COMPUTER SCIENCE, HIGH SCHOOL</h2>
            </div>
            <div class="info margin-bottom">
                <p class="nav-link info2-label">MY PRESENCE</p>
                <h2 class="sub-title">MEDIUM, GITHUB</h2>
            </div>
            <div class="info">
                <p class="nav-link info2-label">HOBBY</p>
                <h2 class="sub-title">SOLVING BUGS</h2>
            </div>
    </section>
</body>
</html>
