<center>
<?php 
	if(isset($_GET["submit"]))
	{
		$name = $_GET["name"];
		$age = $_GET["age"];
		if($age<18)
		{
			echo nl2br("<h3>Hello ".$name." \n You are not authorized to visit this page !</h3>");
		}
		else
		{
			include("index1.php");
		}
	}
?>
</center>