<?php  
//require 'server.php';
$query = $this->db->get('users'); 
//$result = mysqli_query($con, $query);  
?>  
<!DOCTYPE html>  
<html>  
<head>  
 <title>Employee Data</title>  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
 <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
 <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
</head>  
<body>  
 <br /><br />  
 <div class="container">  
  <h3 align="center">Employee Data Table</h3>  
  <br />  
  <div class="table-responsive">  
   <table id="employee_data" class="table table-striped table-bordered">  
    <thead>  
     <tr>  
      <td>Name</td>  
      <td>Last Name</td>  
      <td>Department</td>  
      <td>Address</td>  
      <td>ID</td>
      <td>Change data</td>    
    </tr>  
  </thead>  
  <?php  
  foreach ($query->result_array() as $row)  
  {  
   echo '  
   <tr>  
    <td>'.$row["Emri"].'</td>  
    <td>'.$row["Mbiemri"].'</td>  
    <td>'.$row["Department"].'</td>  
    <td>'.$row["Adress"].'</td>  
   <td>'.$row["id"].'</td>  
   <td><form method="post" action="<?php echo base_url(); ?>simple_controller/update_validation"> 
    <button type="submit" name="submitForm" value="formSave">Change Data</button>
    </form>  
    </td>
  </tr>  
  ';  
}  
?>  
</table>  
</div>  
</div>  
</body>  
</html>  
<script>  
  $(document).ready(function(){  
    $('#employee_data').DataTable();  
  });  
</script>
<a href="load_admin">Go back</a>
