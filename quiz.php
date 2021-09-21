<?php 

session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
	<table width="999" border="0">
  <tbody>
    <tr>
      <td align="center"><?php 
echo "<h1>Welcome " . $_SESSION['username'] . "</h1>";
?></td>
      <td align="center"><a href="logout.php">Logout</a></td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

	<form align="center ">
    <table align="center " width="500" border="0">
  <tbody>
    <tr>
      <td></td>
      <td><input name="question" type="text" size="100"></td>
    </tr>
    <tr>
      <td><input type="radio" name="choix" value="first"></td>
      <td><input name="c1" type="text" size="100"></td>
    </tr>
    <tr>
      <td><input type="radio" name="choix" value="second"></td>
      <td><input name="c2" type="text" size="100"></td>
    </tr>
    <tr>
      <td><input type="radio" name="choix" value="third"></td>
      <td><input name="c3" type="text" size="100"></td>
    </tr>
    <tr>
      
      <td><input  type="button" name="next" value="next"></td>
     
    </tr>
  </tbody>
</table>
</form>

	
	
																	  
</body>
</html>