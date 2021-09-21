<?php
//session_start();
//include('uploadquestfile.php');


include 'config.php';
	

 $uploaddir = 'C:\wamp64\www\efmphp';
    $uploadfile = $uploaddir . basename($_FILES['fileupload']['tmp_name']);

	if(isset($_POST["submit"])) {
 

    

    if (move_uploaded_file($_FILES['fileupload']['tmp_name'], $uploadfile)) {
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "Upload failed";
    }
}

	
	
	
	
	 $myfile = fopen($uploadfile,"r") or die("Unable to open file!");
	var_dump($uploadfile);
  
	while(!feof( $myfile)){
		
	$str = fgets($myfile);
	$data=explode('|',$str);
	
	$question=$data[0];
	$answerstring=$data[1];
	$trueanswer=$data[2];

	$choices=explode(',',$answerstring);
	
	$choix1=$choices[0];
	$choix2=$choices[1];
	$choix3=$choices[2];
		
	
	$sql="INSERT INTO `quiz`(`id`, `question`, `c1`, `c2`, `c3`, `answer`) VALUES (null,$question,$choix1,$choix2,$choix3,$trueanswer)";
	mysqli_query($con,$sql);
	
	}

  fclose($myfile);
	


?>
<html>
<head>
<meta charset="utf-8">

</head>

<body>
	<form method="post" enctype="multipart/form-data">
		<input type="file" name="fileupload" id="fileupload" >
	<input type="submit" name="submit" value="add" >
	<input type="button" name="viewquiz" value="view quiz">
	<input type="button" name="timemanage" value="time management">
	<input type="button" name="result" value="user result">
	</form>

	
</body>
</html>