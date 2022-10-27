<!DOCTYPE html>
<html>
<head>
	<title>Kaum Wirausaha Jaya</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/ui/css/style.css'); ?>">
</head>
<body>
	<br/>
	<br/>
	<center><h2>Wirausaha Jayabadi</h2></center>
	<center><h2>KOMUNITAS Wiccccccccccccrausaha</h2></center>		
	<br/>
	<div class="login">
	<br/>
		<form action="<?php echo site_url('proseslogin'); ?>" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
		</form>
	</div>

<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus diisi!');
			return false;
		}
	}
	<?php
	if(null !== $this->session->flashdata('alert')){
		echo "alert('".$this->session->flashdata('alert')."');";
	}
	?>
</script>
</body>
</html>