
            <div id="layoutSidenav_content">
                <main>

 

<div class="col-md-6 offset-3">

		<br>

		<h4>Edit Organ</h4>
<form action="" method="post" enctype="multipart/form-data" >

	<?=$this->session->flashdata('message');?>
	
	<div class="form-group">

		<input type="text" class="form-control" place_nameholder="ORAGAN" value="<?php if(set_value('ORGAN_NAME')){ echo set_value('ORGAN_NAME'); }else{ echo $organ[0]['ORGAN_NAME']; }?>" name="ORGAN_NAME"  >

	</div>

	<div class="error"><?=form_error('ORGAN_NAME')?></div>
	<div class="form-group">

	<input type="submit"  place_name="submit" class="btn btn-success" value="Edit data Now" > 
	<a href="<?=base_url()?>admin/view-organ/"><button type="button" class="btn btn-success">Back To Table</button><a>
	<!-- <button type="submit">Add Data</button> -->
	<!-- <button type="button">Add Data</button> -->

	</div>

</form>

</div>

</div>

<style> .error{ color:red; } </style>


		
		</main>