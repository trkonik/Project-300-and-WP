<div id="layoutSidenav_content">
                <main>
<div id="container">

<h1>View detail</h1>

 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<tr>
	<th>VITAMIN_ID</th>
	<th>ORGAN_ID</th>
	<th>SYMPTOM_ID</th>
	<th>DESCRIPTION</th>
	<th>NUTRITION</th>
	<th>Edit</th>
	<th>Delete</th>
	 
</tr>



<?php   

foreach ($detail as $row) {
	 
echo '<tr>';
echo '<td>'.$row['VITAMIN_NAME'].'</td>';
echo '<td>'.$row['ORGAN_NAME'].'</td>';
echo '<td>'.$row['SYM_NAME'].'</td>';
echo '<td>'.$row['DESCRIPTION'].'</td>';
echo '<td>'.$row['NUTRITION'].'</td>';


echo '<td><a href="'.base_url().'admin/edit-detail/'.$row['D_ID'].'"><button class="btn btn-success">EDIT</button><a></td>';
echo '<td><a href="'.base_url().'admin/delete-detail/'.$row['D_ID'].'"><button class="btn btn-danger">DELETE</button><a></td>';
 
echo '</tr>';
 

}

 


?>

</table>

	
</div>
                    


                
      </main>