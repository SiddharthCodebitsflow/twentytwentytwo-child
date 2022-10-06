<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Document</title>
	<script src="https://kit.fontawesome.com/b7ccdde283.js" crossorigin="anonymous"></script>
</head>

<body>
	<div class="my-5 text-center">
		<?php
		global $wpdb;
		$results = $wpdb->get_results("SELECT * FROM wp_posts WHERE post_status ='trash'", OBJECT);

		foreach ($results as $results) {
			$arr = json_decode($results->post_content, TRUE);
			// print_r($arr);
			foreach ($arr as $arr) {
				$url = $arr['value'];
				$domain = parse_url($url);
				$dataStrip = str_ireplace('www.', '', $domain);
				$data = str_ireplace('.com', '', $dataStrip['host']);
				$resultImage = $wpdb->get_results("SELECT * FROM wp_posts WHERE post_title ='$data'", OBJECT);

				foreach ($resultImage as $resultImage) {
					$imageName = $resultImage->post_title;
					$ImagePath = $resultImage->guid;
				}
				if ($imageName == $data) {
		?>
					<a href="<?= $url ?>"><img height="30px" width="30px" src="<?= $ImagePath ?>"> </a>

		<?php
				}
			}
		}
		?>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>