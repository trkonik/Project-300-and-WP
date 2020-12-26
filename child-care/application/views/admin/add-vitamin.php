
            <div id="layoutSidenav_content">
                <main>

 

<div class="col-md-6 offset-3">

		<br>

		<h4>Add Vitamin</h4>
<form action="" method="post" enctype="multipart/form-data" >


	<?=$this->session->flashdata('message');?>
	
	<div class="form-group">

		<input type="text" class="form-control" placeholder="Vitamin" value="<?=set_value('VITAMIN_NAME')?>" name="VITAMIN_NAME"  >

	</div>

	<div class="error"><?=form_error('VITAMIN_NAME')?></div>


	
	<div class="form-group">

		<input type="submit"  name="submit" class="btn btn-success" value="Add Vitamin" > 
		<!-- <button type="submit">Add Data</button> -->
		<!-- <button type="button">Add Data</button> -->

	</div>

</form>
</div>
              