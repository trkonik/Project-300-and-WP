
            <div id="layoutSidenav_content">
                <main>

 

<div class="col-md-6 offset-3">

		<br>

		<h4>Edit Alert</h4>
<form action="" method="post" enctype="multipart/form-data" >


	<?=$this->session->flashdata('message');?>
	
	<div class="form-group">
		
		<input type="text" class="form-control" placeholder="Alert Detail" value="<?php if(set_value('A_DETAIL')){ echo set_value('A_DETAIL'); }else{ echo $alert[0]['A_DETAIL']; }?>" name="NAME"  >
	
	</div>

	<div class="error"><?=form_error('A_DETAIL')?></div>


	<div class="form-group">

	<input type="date" class="form-control"  value="<?php if(set_value('DATE_FROM')){ echo set_value('DATE_FROM'); }else{ echo $alert[0]['DATE_FROM']; }?>"  name="DATE_FROM"  >

	</div>

	<div class="error"><?=form_error('DATE_FROM')?></div>
	<div class="form-group">

	<input type="date" class="form-control"  value="<?php if(set_value('DATE_TO')){ echo set_value('DATE_TO'); }else{ echo $alert[0]['DATE_TO']; }?>"  name="DATE_TO"  >

	</div>

	<div class="error"><?=form_error('DATE_TO')?></div>

	<div class="form-group">

	<input type="text" class="form-control" placeholder="STATUS" value="<?php if(set_value('STATUS')){ echo set_value('STATUS'); }else{ echo $alert[0]['STATUS']; }?>"  name="STATUS"   >

	</div>
	<div class="error"><?=form_error('STATUS')?></div>

	<div class="form-group">

		<input type="submit"  name="submit" class="btn btn-success" value="Add data Now" > 
		<a href="<?=base_url()?>admin/view-alert/"><button type="button" class="btn btn-success">Back To Table</button><a>
		<!-- <button type="submit">Add Data</button> -->
		<!-- <button type="button">Add Data</button> -->

	</div>

</form>

</div>
	
 

<style> .error{ color:red; } </style>



                
                </main>
              