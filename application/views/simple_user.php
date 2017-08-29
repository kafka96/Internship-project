<?php
		 $this->load->model('simple_model');
		 $username = $this->session->userdata('username');
		$name = $this->simple_model->get_user_name($username);
		$lastname = $this->simple_model->get_user_lastname($username);
		$address = $this->simple_model->get_user_adress($username);
		 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile|Simple User</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" />  
</head>
<body>
	<div class="container">  
		<br /><br /><br />  
		<form method="post" action="<?php echo base_url(); ?>simple_controller/update_validation">  
			<div class="form-group">  
				<label>Change Name</label>  
				<input type="text" name="Emri" placeholder="<?php echo $name;?>" class="form-control" />  
				<span class="text-danger"><?php echo form_error('Emri'); ?></span>                 
			</div>  
			<div class="form-group">  
				<label>Change Last Name</label>  
				<input type="text" name="Mbiemri" placeholder="<?php echo $lastname;?>"class="form-control" />  
				<span class="text-danger"><?php echo form_error('Mbiemri'); ?></span>  
			</div>  
			<div class="form-group">  
				<label>Change Address</label>  
				<input type="text" name="Adress" placeholder="<?php echo $address;?>"class="form-control" />  
				<span class="text-danger"><?php echo form_error('Adress'); ?></span>  
			</div>
			<div class="form-group">  
				<input type="submit" name="insert" value="Change" class="btn btn-info" />  
				<?php  
				echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  
				?>  
			</div>  
		</form>  
	</div>
	<?php echo '<label><a href="'.base_url().'simple_controller/logout">Logout</a></label>';?>
</body>
</html>