<div id="layoutSidenav_content">
                <main>
<div id="container">

<h1>View Blog</h1>

 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<tr>
	<th>Blog Title</th>
	<th>Description</th>
	<th>Edit</th>
	<th>Delete</th>
	 
</tr>



<?php   

foreach ($blog as $row) {
	 
echo '<tr>';
echo '<td>'.$row['B_TITLE'].'</td>';
echo '<td>'.$row['DESCRIPTION'].'</td>';
echo '<td><a href="'.base_url().'admin/edit-blog/'.$row['B_ID'].'"><button class="btn btn-success">EDIT</button><a></td>';
echo '<td><a href="'.base_url().'admin/delete-blog/'.$row['B_ID'].'"><button class="btn btn-danger">DELETE</button><a></td>';
echo '</tr>';
}
?>

</table>

	
</div>
                    


                
     