<?php

require 'config.php';

$output = '';

$sql = "SELECT * FROM books WHERE judul LIKE '%" . $_POST["search"] . "%' OR pengarang LIKE '%" . $_POST["search"] . "%'";
$result = $conn->query($sql);

//$result = mysqli_query($connect, $sql);
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$output .= '<div class="col-md-3 mb-2">
								<div class="portfolio-wrap">
									<img src="' . $row['img'] . '" class="img-fluid">
									<div class="portfolio-info">
										<h4>' . $row['judul'] . '</h4>
										<p>' . $row['kategori'] . '</p>
										<div class="portfolio-links">
											<a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
										</div>
									</div>
								</div>
							</div>';
	}
} else {
	$output = "<h3>Buku Tidak Ditemukan!</h3>
	<br>
	<p>Web masih dalam pengembangan, kami akan segera melengkapi koleksi buku kami.</p>
		";
}
echo $output;
