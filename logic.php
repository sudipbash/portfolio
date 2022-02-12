<?php

    $conn = mysqli_connect("localhost", "root", "", "article");

    $sql = "SELECT * from data ORDER by id desc";
    $query = mysqli_query($conn, $sql);
    
    if(isset($_REQUEST["new_post"])){
        $title = $_REQUEST["title"];
        $tag = $_REQUEST["tag"];
        $content = $_REQUEST["content"];
        $sql = "INSERT INTO data(title, tag, content) VALUES('$title', '$tag', '$content')";
        mysqli_query($conn, $sql);
        
        // Redirect the author to the article page
        header("Location: articles.php");
        exit();
    }


?>
