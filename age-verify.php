<center>
<?php 
	if(isset($_GET["submit"]))
	{
		$name = $_GET["name"];
		$age = $_GET["age"];
		if($age<18)
		{
			echo nl2br("<h3>Hello ".$name." \n You are not authorized to visit this page !</h3>");
			echo ("<h4>becuase you age is below 18</h4>")
		}
		else
		{
			include("index1.php");
		}
	}
	echo 'Your age is above 18 and your allowed here!'
?>
</center>
