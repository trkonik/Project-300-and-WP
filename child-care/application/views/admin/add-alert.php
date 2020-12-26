
            <div id="layoutSidenav_content">
                <main>
				
 

<div class="col-md-6 offset-3">

		<br>

		<h4>Add Alert</h4>
	<form action="" method="post" enctype="multipart/form-data" >


	<?=$this->session->flashdata('message');?>
	
	<div class="form-group">

		<input type="text" class="form-control" placeholder="Alert Detail" value="<?=set_value('A_DETAIL')?>" name="A_DETAIL"  >

	</div>

	<div class="error"><?=form_error('A_DETAIL')?></div>


	<div class="form-group">

		<input type="date" class="form-control"  value="<?=set_value('DATE_FROM')?>"  name="DATE_FROM"  >

	</div>

	<div class="error"><?=form_error('DATE_FROM')?></div>

	<div class="form-group">

		<input type="date" class="form-control"  value="<?=set_value('DATE_TO')?>"  name="DATE_TO"  >

	</div>

	<div class="error"><?=form_error('DATE_TO')?></div>


	<div class="form-group">

		<input type="text" class="form-control" placeholder="STATUS" value="<?=set_value('STATUS')?>"  name="STATUS"   >

	</div>
			<div class="error"><?=form_error('STATUS')?></div>
	</div>

	<div class="form-group">

		<input type="submit"  name="submit" class="btn btn-success" value="Add data Now" > 
		<!-- <button type="submit">Add Data</button> -->
		<!-- <button type="button">Add Data</button> -->

	</div>
	</form>	
</div>


 


              