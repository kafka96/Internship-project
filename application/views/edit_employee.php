<!DOCTYPE html>
<html>
<head>
	<title>Employee Data editor</title>
</head>
<body>
<div class="container">  
           <br /><br /><br />  
           <form method="post" action="<?php echo base_url(); ?>employee_editor/change_validate">  
                <div class="form-group">  
                     <label>Enter the new department</label>  
                     <input type="text" name="Department" class="form-control" />  
                     <span class="text-danger"><?php echo form_error('Department'); ?></span>                 
                </div>  
                <div class="form-group">  
                    <select name="cars">
    					<option value="yes">Yes</option>
    					<option value="no" selected>No</option>
  					</select>
  					<br><br>
                </div>  
                <div class="form-group">  
                     <input type="submit" onclick="alert('You have changed your employee data!')" name="insert" value="Change" class="btn btn-info" />  
                     <?php  
                          echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  
                     ?>  
                </div>  
                <?php echo '<label><a href="'.base_url().'main/signup">Sign Up</a></label>';?>
           </form>  
      </div> 
</body>
</html>