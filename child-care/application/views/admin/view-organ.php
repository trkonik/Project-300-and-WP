<div id="layoutSidenav_content">
                <main>
<div id="container">

<h1>View Organ</h1>

 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<tr>
	<th>Organ Name</th>
      <th>Edit</th>
      <th>Delete</th>
	 
</tr>



<?php   

foreach ($organ as $row) {
	 
echo '<tr>';
echo '<td>'.$row['ORGAN_NAME'].'</td>';



echo '<td><a href="'.base_url().'admin/edit-organ/'.$row['O_ID'].'"><button class="btn btn-success">EDIT</button><a></td>';
echo '<td><a href="'.base_url().'admin/delete-organ/'.$row['O_ID'].'"><button class="btn btn-danger">DELETE</button><a></td>';
 
echo '</tr>';
 

}

 


?>

</table>

	
</div>
                    


                
      </main>