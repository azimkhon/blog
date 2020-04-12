<?php

require_once "db.php";

    function getNews($limit) {
        global $mysqli;
        connectDB();
        $result = $mysqli->query("SELECT * FROM `posts` ORDER BY `id` DESC LIMIT $limit");
        closeDB();
        return resultToArray($result);
    }

    function resultToArray($result) {
        $array = array();
        while (($row = $result->fetch_assoc()) != false)
            $array[] = $row;
        return $array;
    }