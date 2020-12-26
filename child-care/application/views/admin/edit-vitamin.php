
            <div id="layoutSidenav_content">
                <main>

 

<div class="col-md-6 offset-3">

		<br>

		<h4>Edit Vitamin</h4>
<form action="" method="post" enctype="multipart/form-data" >

	<?=$this->session->flashdata('message');?>
	
	<div class="form-group">

		<input type="text" class="form-control" place_nameholder="Vitamin" value="<?php if(set_value('VITAMIN_NAME')){echo set_value('VITAMIN_NAME');}else{echo $vitamin[0]['VITAMIN_NAME'];}?>" name="VITAMIN_NAME">

	</div>

	<div class="error"><?=form_error('VITAMIN_NAME')?></div>
	<div class="form-group">

	<input type="submit"  place_name="submit" class="btn btn-success" value="Edit Vitamin" > 
	<a href="<?=base_url()?>admin/view-vitamin/"><button type="button" class="btn btn-success">Back To Table</button><a>
	<!-- <button type="submit">Add Data</button> -->
	<!-- <button type="button">Add Data</button> -->

	</div>

</form>

</div>

</div>

<style> .error{ color:red; } </style>


		
		</main>