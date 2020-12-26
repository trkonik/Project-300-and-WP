<div id="layoutSidenav_content">
                <main>
<div id="container">

<h1>View Vitamin</h1>

 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<tr>
	<th>VITAMIN_NAME</th>
      <th>Edit</th>
      <th>Delete</th>
	 
</tr>



<?php   

foreach ($vitamin as $row) {
	 
echo '<tr>';
echo '<td>'.$row['VITAMIN_NAME'].'</td>';



echo '<td><a href="'.base_url().'admin/edit_vitamin/'.$row['V_ID'].'"><button class="btn btn-success">EDIT</button><a></td>';
echo '<td><a href="'.base_url().'admin/delete_vitamin/'.$row['V_ID'].'"><button class="btn btn-danger">DELETE</button><a></td>';
 
echo '</tr>';
 

}

 


?>

</table>

	
</div>
                    


                
      </main>