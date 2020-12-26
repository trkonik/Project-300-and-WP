<div id="layoutSidenav_content">
                <main>
<div id="container">

<h1>View Alert</h1>

 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<tr>
	
	<th>User</th>

	<th>Alert Detail</th>
	<th>Date To</th>
	<th>Delete</th>
	 
</tr>



<?php   

foreach ($alert as $row) {
	 
echo '<tr>';

echo '<td>'.$row['NAME'].'</td>';
echo '<td>'.$row['ALERT_DETAIL'].'</td>';
echo '<td>'.$row['ALERT_DATE'].'</td>';



echo '<td><a href="'.base_url().'user/delete-alert/'.$row['A_ID'].'"><button class="btn btn-danger">DELETE</button><a></td>';
 
echo '</tr>';
 

}

 


?>

</table>

	
</div>
                    


                
      </main>