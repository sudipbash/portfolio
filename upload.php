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
    <form method="POST" class="article-input">
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="tag" placeholder="Tag">
        <textarea name="content" placeholder="Write article here.." id="" rows="15" aria-setsize="0"></textarea>
        <button name="new_post" class="publish-button">Publish</button>
    </form>
</body>
</html>