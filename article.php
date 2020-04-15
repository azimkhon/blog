<!DOCTYPE html>
<html lang="en">

<?php
require_once "backend/functions.php";
$news = getNews(1, $_GET["id"]);
$title = $news["title"];
require_once "blocks/head.php";

?>

<body>

<?php require_once "blocks/header.php"?>

<!-- Main blocks -->

<div id="wrapper">
    <div id="leftcol">


        <?php


            echo ' <div class="bigarticle">
                                <img src="img/'.$news["id"].'.png" alt="Article image'.$news["id"].'">
                                <h2>'.$news["title"].'</h2>
                                <p>'.$news["intro_text"].'</p>
                                <p>'.$news["full_text"].'</p>
                                <a href="index.php"><div> Return back </div></a>
                            </div>';

            echo "<div class=\"clear\"><br></div>";


        ?>

    </div>

    <?php require_once "blocks/rightcol.php"?>

</div>

<?php require_once "blocks/footer.php"?>

</body>
</html>