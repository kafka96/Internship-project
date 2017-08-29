<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" />  
</head>
<body>
	<div class="container">  
		<br /><br /><br />  
		<form method="post" action="<?php echo base_url(); ?>main/sign_up">  
			<div class="form-group">  
				<label>Name</label>  
				<input type="text" name="Emri" placeholder="Name ex: David" class="form-control" />  
				<span class="text-danger"><?php echo form_error('Emri'); ?></span>                 
			</div>  
			<div class="form-group">  
				<label>Last Name</label>  
				<input type="text" name="Mbiemri" placeholder="Last Name ex: Smith" class="form-control" />  
				<span class="text-danger"><?php echo form_error('Mbiemri'); ?></span>  
			</div> 
			<div class="form-group">  
				<label>User Name</label>  
				<input type="text" name="username" placeholder="ex: skull123" class="form-control" />  
				<span class="text-danger"><?php echo form_error('Adress'); ?></span>  
			</div>
			<div class="form-group">  
				<label>Password</label>  
				 <input type="password" name="password" placeholder="Please make sure you don't forget your password" class="form-control" />  
                 <span class="text-danger"><?php echo form_error('password'); ?></span>  
			</div> 
			<div class="form-group">  
				<label>Address</label>  
				<input type="text" name="Adress" placeholder="ex: Rr. Sami Frasheri" class="form-control" />  
				<span class="text-danger"><?php echo form_error('Adress'); ?></span>  
			</div>
			<div class="form-group">  
				<input type="submit" name="insert" value="Sign Up" class="btn btn-info" />  
				<?php  
				echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  
				?>  
			</div>  
				<?php echo '<label><a href="'.base_url().'main/login">Already have an account? Log in!</a></label>';?>
		</form>  
	</div>
</body>
</html>