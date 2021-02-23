<?php

$conn = new mysqli("localhost", "root", "lanesrA1886", "baca_buku");

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
