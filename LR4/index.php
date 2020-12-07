<!DOCTYPE html>
<html>
<head>
	<title>Lab dien</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	if(	array_key_exists('username', $_POST) &&
		array_key_exists('password', $_POST)){
		// login form has been sent
		$username = $_POST['username'];
		$password = $_POST['password'];
		$mas = file("data.txt", FILE_IGNORE_NEW_LINES);
		$passed = FALSE;
		if($mas != FALSE){
			for ($i=0; $i+1 < count($mas); $i+=2) { 
				$u = $mas[$i];
				$p = $mas[$i+1];
				if(	$username == $u &&
					$password == $p){
					?>Welcome, <?php
					echo $u;
					$passed = TRUE;
					break;
				}
			}
			if(!$passed){
				
					?>Don't stop trying<?php
				
			}
		}
	}else{
		//show login form
		?>
<form action="" method="POST">
	<label for="username">Username:</label>
	<input type="text" name="username"><br>
	<label for="password">Password:</label>
	<input type="password" name="password"><br>
	<input type="submit" name="">
</form>
		<?php
	}
	
?>
</body>
</html>