<html>
    <head>
	</head>
	<body>
	<?php
		$err_name="";
		$name="";
		$err_email="";
		$email="";
		$err_phn="";
		$phn="";
		$err_address="";
		$address="";
		if(isset($_POST['submit']))
		{
			
			if(empty($_POST['name']))
			{
				$err_name="*Name Required";
			}
			else
			{			
				$name=htmlspecialchars($_POST['name']);
				echo $name;
			}
			if (empty($_POST['email']))
			{
				$err_email="*E-mail Required";
			}
			else
			{
				$email=$_POST['email'];
			}
			if (empty($_POST['phn']))
			{
				$err_phn="*Phone Number Required";
			}
			else
			{
				$phn=$_POST['phn'];
			}
			if (empty($_POST['address']))
			{
				$err_phn="*Address Required";
			}
			else
			{
				$address=$_POST['address'];
			}
		}
	?>
	<form method="post" action="">
	<table>
	<form>
	<tr>
	<h1><b> Club Membership Registration</b></h1>
	complete the from below to sign up for our membership service<br><hr>
	</tr>
	<tr style="text-align:center;">
					<td>Name:</td>
					<td><input type="text" value="<?php echo $name;?>" name="name" >
						<br><span style="color:red"><?php echo $err_name;?></span></td>
					<td><input type="text" value="<?php echo $name;?>" name="name" >
						<br><span style="color:red"><?php echo $err_name;?></span></td>
					
				</tr>
				<tr style="text-align:center;">
					<td></td><td>First Name</td><td>Last Name</td>
				</tr>
				<tr style="text-align:center;">
					<td>E-mail: </td>
					<td><input type="text" name="email" value="<?php echo $email;?>" placeholder="ex: myname@example.com">
					<br><span style="color:red"><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td></td><td>example@example.com</td>
				</tr>
				<tr>
					<td>Phone Number:</td>
					<td> <input type="phn" name="phn" value="<?php echo $phn;?>">
					<br><span style="color:red"><?php echo $err_phn;?></span></td>
					<td> <input type="phn" name="phn" value="<?php echo $phn;?>">
					<br><span style="color:red"><?php echo $err_phn;?></span></td>
				</tr>
				<tr>
					<td></td><td>Area Code</td><td>Phone Number</td>
				</tr>
				<tr style="text-align:center;">
					<td>Address </td>
					<td><input type="text" name="address" value="<?php echo $address;?>">
					<br><span style="color:red"><?php echo $err_address;?></span></td>
				</tr>
				<tr style="text-align:center;">
					<td></td><td>Street Address</td>
				</tr>
				<tr style="text-align:center;">
					<td></td>
					<td><input type="text" name="address" value="<?php echo $address;?>">
					<br><span style="color:red"><?php echo $err_address;?></span></td>
				</tr>
				<tr style="text-align:center;">
					<td></td><td>Street Address Line 2</td>
				</tr>
				<tr style="text-align:center;">
					<td></td>
					<td><input type="text" name="address" value="<?php echo $address;?>">
					<br><span style="color:red"><?php echo $err_address;?></span></td>
					<td><input type="text" name="address" value="<?php echo $address;?>">
					<br><span style="color:red"><?php echo $err_address;?></span></td>
				</tr>
				<tr>
					<td></td><td>City</td><td>State / Province</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="text" name="address" value="<?php echo $address;?>">
					<br><span style="color:red"><?php echo $err_address;?></span></td>
				</tr>
				<tr>
					
					<td>Birth Date: </td>
					<td>
						<select name="month">
						<option></option>
						<option value="January">January</option>
						<option value="February">February</option>
						<option value="Mars">Mars</option>
						<option value="April">April</option>
						<option value="May">May</option>
						<option value="June">June</option>
						<option value="July">July</option>
						<option value="September">September</option>
						<option value="October">October</option>
						<option value="November">November</option>
						<option value="December">December</option>
						</select>
					</td>
					<td>
						<select name="day">
						<?php
						for($i=0;$i<=31;$i++)
						{
							echo '<option value='.$i.'>'.$i.'</option>';
							
						}?>
					</td>
						</select>
					<td>
						<select name="year">
						<?php
						for($i=0;$i<=2020;$i++)
						{
							echo '<option value='.$i.'>'.$i.'</option>';
						}

						?>
						</select>
						<tr>
					<td>Where did you hear about us?</td>
					<td rowspan="8"><input type="radio" name="hear" value="A friend or colleauge">A friend or colleauge<br>
									<input type="radio" name="hear" value="Google">Google<br>
									<input type="radio" name="hear" value="Blog Post">Blog Post<br>
									<input type="radio" name="hear" value="News Article">News Article<br>
									
				</tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr>
					<td>
						<input type="submit" name="submit" value="Submit">
					</td>
				</tr>
						
						
				
			</table>
		</form>
	</body>
</html>