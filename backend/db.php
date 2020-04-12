<?php

	$mysqli = false;

	function connectDB() {
		global $mysqli;
		$mysqli = new mysqli('localhost','root','root','blog');

		if (!$mysqli) {
			die('Error connect to database');
		}
	}

	function closeDB() {
		global $mysqli;
		$mysqli->close();
	}


