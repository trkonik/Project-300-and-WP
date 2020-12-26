<div id="layoutSidenav_content">
                <main>
<div id="container">

<h1>View user</h1>

 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<tr>
	<th>NAME</th>
	<th>EMAIL</th>
	<th>BLOOD-GROUP</th>
	<th>WEIGHT</th>
	<th>DOB</th>
	<th>TYPE</th>
	<th>Edit</th>
	<th>Delete</th>
	 
</tr>



<?php   

foreach ($user as $row) {
	 
echo '<tr>';
echo '<td>'.$row['NAME'].'</td>';
echo '<td>'.$row['EMAIL'].'</td>';
echo '<td>'.$row['BLOOD-GROUP'].'</td>';
echo '<td>'.$row['WEIGHT'].'</td>';
echo '<td>'.$row['DOB'].'</td>';
echo '<td>'.$row['TYPE'].'</td>';



echo '<td><a href="'.base_url().'admin/edit-user/'.$row['ID'].'"><button class="btn btn-success">EDIT</button><a></td>';
echo '<td><a href="'.base_url().'admin/delete-user/'.$row['ID'].'"><button class="btn btn-danger">DELETE</button><a></td>';
 
echo '</tr>';
 

}

 


?>

</table>

	
</div>
                    


                
      </main>