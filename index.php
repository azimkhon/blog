<!DOCTYPE html>
<html lang="en">

    <?php
    $title = "My personal Blog";
    require_once "blocks/head.php";
    $news = getNews(3);
    ?>

<body>

    <?php require_once "blocks/header.php"?>

    <!-- Main blocks -->

    <div id="wrapper">
    	<div id="leftcol">

            <?php
                for ($i=0; $i < count($news); $i++) {
                    if ($i==0)
                        echo "<div class=\"bigarticle\">";
                    else
                        echo "<div id=\"article\">";
                /*    echo '
                <img src=\"img/'.$news[$i]["id"].''.png\" alt=\"Article image'.$news[$i]["id"].'\">
                <h2>'.$news[$i]["title"].'</h2>
                <p>'.$news[$i]["full_text"].'</p>
                <a href=\"#\"><div>See More ... </div></a>'; */

                }
            ?>

    	</div>

        <?php require_once "blocks/rightcol.php"?>

    </div>

    <?php require_once "blocks/footer.php"?>

</body>
</html>