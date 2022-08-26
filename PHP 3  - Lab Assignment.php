<?php
	session_start();
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
	<input type="text" name="n1" required />
	<input type="hidden" name="formName" value="f1" />
	<input type="submit" value="add" /> 
</form>
<?php
	if( $_SERVER["REQUEST_METHOD"] == "POST")
	{
		if($_REQUEST["formName"] == "f1")
		{
			$i = count($_SESSION);
			$key = "var".$i;
			
			$_SESSION[$key] = $_REQUEST["n1"];
			$template = "";
			$template = "<form method='post' action='".$_SERVER["PHP_SELF"]."'>";
			
			$i = 1;	
			foreach($_SESSION as $key => $item)
			{
				if($key != "template")
					$template .= "<input type='checkbox' name='cb[]' value='$item' />chk".$i++."<br>";
			}
			$template .= "<input type='hidden' name='formName' value='f2' />";
			$template .= "<input type='submit' value='submit' />";
			$template .= "</form>";
			echo $template;
			$_SESSION['template'] = $template;	
		}
		else
			if($_REQUEST["formName"] == "f2")
			{
				echo $_SESSION['template'];
				$checkboxValue = $_REQUEST["cb"];
				foreach($checkboxValue as $x)
					echo $x." ";
				
			}
	}
	else
	{
		session_unset(); 
		session_destroy();
		$_SESSION['template'] = "";
	}
?>
