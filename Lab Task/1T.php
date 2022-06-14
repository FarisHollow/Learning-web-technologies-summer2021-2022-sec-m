<?php
session_start();
include("Validation.php")
<html>
<head>
	<title>FORM</title>
</head>
<body>
		<form action "2.php" method="post">
			<fieldset>
				<legend><br>NAME</br></legend>
				<table>
					<tr>
						<td>username</td>
						<td><input type="text" name="" value="" ></td><?php echo $NameError;?>
					</tr>
					<tr>
					    <td><hr></hr></td>
					    <td><hr></hr></td>
					</tr>
					<tr>
					
					
						<td>
							
							<input type="submit" name="" value="Submit">
							
						</td>
						
					</tr>
				</table>
			</fieldset>
		</form>

</body>
</html>