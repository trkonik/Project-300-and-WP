
            <div id="layoutSidenav_content">
                <main>

 

<div class="col-md-6 offset-3">

		<br>

		<h4>Add Blog</h4>
<form action="" method="post" enctype="multipart/form-data" >


	<?=$this->session->flashdata('message');?>
	
	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Blog Title" value="<?=set_value('B_TITLE')?>" name="B_TITLE"  >

	</div>

	<div class="error"><?=form_error('B_TITLE')?></div>


	<div class="form-group">

		<input type="text" class="form-control" placeholder="Description" value="<?=set_value('DESCRIPTION')?>"  name="DESCRIPTION"  >

	</div>

	<div class="error"><?=form_error('DESCRIPTION')?></div>



	<div class="form-group">

		<input type="submit"  name="submit" class="btn btn-success" value="Add data Now" > 
		<!-- <button type="submit">Add Data</button> -->
		<!-- <button type="button">Add Data</button> -->

	</div>

</form>

</div>
	
 

<style> .error{ color:red; } </style>



                
                </main>
              