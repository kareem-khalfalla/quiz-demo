<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>acceuil</title>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/acme:n4:default;amaranth:n4:default;andika:n4:default;arimo:n4:default.js" type="text/javascript"></script>


</head>

<body>
	
<h1>Veuillez choisir votre statut</h1>
	<br><br>
	<form method="post" >
		
	  <table width="257" align="center">
		  <tr>
		    <td width="249"><label>
		      <input type="radio" name="radiob"  value="First"  >
		      <span style="font-style: normal; font-weight: bold; font-size: xx-large;">utilisateur</span></label></td>
	    </tr>
		  <tr>
		    <td ><label>
				
		      <input type="radio" name="radiob"  value="Second" >
		      <span style="font-size: xx-large; font-style: normal; font-weight: bold;">administrateur</span></label></td>
	    </tr>
		  <tr>
		    <td align="center"><input   name="submit" type="submit" id="submit"  value="ok"></td></tr>
		  
	  </table>
    </form>
	  <?php
if (isset($_POST["submit"]))
  {
$radioVal = $_POST["radiob"];

if($radioVal == "First")
{
header('Location: http://localhost/efmphp/user.php');
}
else if ($radioVal == "Second")
{
header('Location: http://localhost/efmphp/admin.php');
}
}
?>

</body>
</html>