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
	 
	 
</tr>



<?php   

foreach ($detail as $row) {
	 
echo '<tr>';
echo '<td>'.$row['VITAMIN_NAME'].'</td>';
echo '<td>'.$row['ORGAN_NAME'].'</td>';
echo '<td>'.$row['SYM_NAME'].'</td>';
echo '<td>'.$row['DESCRIPTION'].'</td>';
echo '<td>'.$row['NUTRITION'].'</td>';


 
echo '</tr>';
 

}

 


?>

</table>

	
</div>
                    


                
      </main>