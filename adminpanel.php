<?php

include 'config.php';

$filePath = '';

if (isset($_FILES['fileupload'])) {
	$filePath = STORAGE_PATH . DIRECTORY_SEPARATOR . $_FILES['fileupload']['name'];
}

if (isset($_POST["submit"])) {
	if (
		move_uploaded_file(
			$_FILES['fileupload']['tmp_name'],
			$filePath
		)
	) {
		echo '<p style="color: #080;">File is valid, and was successfully uploaded.</p>';
	} else {
		echo "Upload failed";
	}
}

if (file_exists($filePath)) {
	# code...
	$myFile = fopen($filePath, "r") or die("Unable to open file!");

	while (!feof($myFile)) {
		$str = fgets($myFile);
		$data = explode('|', $str);

		$question = $data[0];

		if (count($data) == 1) {
			break;
		}

		$answersString = $data[1];
		$trueAnswer = $data[2];
		$choices = explode(',', $answersString);

		$choix1 = $choices[0];
		$choix2 = $choices[1];
		$choix3 = $choices[2];

		$trueAnswer = str_replace('\'', '"', $trueAnswer);
		$question = str_replace('\'', '"', $question);
		$choix1 = str_replace('\'', '"', $choix1);
		$choix2 = str_replace('\'', '"', $choix2);
		$choix3 = str_replace('\'', '"', $choix3);

		$sql = "INSERT INTO `quiz` SET 
		`question` = '$question',
		`c1` = '$trueAnswer',
		`c2` = '$choix1',
		`c3` = '$choix2',
		`answer` = '$choix3'
	";
		mysqli_query($con, $sql);
	}
	
	fclose($myFile);
}


?>
<html>

<head>
	<meta charset="utf-8">
</head>

<body>
	<form method="post" enctype="multipart/form-data">
		<input type="file" name="fileupload" id="fileupload">
		<input type="submit" name="submit" value="add">
		<input type="button" name="viewquiz" value="view quiz">
		<input type="button" name="timemanage" value="time management">
		<input type="button" name="result" value="user result">
	</form>
</body>

</html>