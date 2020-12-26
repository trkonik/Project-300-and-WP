
            <div id="layoutSidenav_content">
                <main>

 

<div class="col-md-6 offset-3">

		<br>

		<h4>Edit blog</h4>
<form action="" method="post" enctype="multipart/form-data" >


	<?=$this->session->flashdata('message');?>
	
	<div class="form-group">
		
		<input type="text" class="form-control" placeholder="Enter Blog Title" value="<?php if(set_value('B_TITLE')){ echo set_value('B_TITLE'); }else{ echo $blog[0]['B_TITLE']; }?>" name="B_TITLE"  >
	
	</div>

	<div class="error"><?=form_error('B_TITLE')?></div>


	<div class="form-group">

	<input type="text" class="form-control" placeholder="Description" value="<?php if(set_value('DESCRIPTION')){ echo set_value('DESCRIPTION'); }else{ echo $blog[0]['DESCRIPTION']; }?>"  name="DESCRIPTION"  >

	</div>

	<div class="error"><?=form_error('DESCRIPTION')?></div>

	<div class="form-group">

		<input type="submit"  name="submit" class="btn btn-success" value="Add data Now" > 
		<a href="<?=base_url()?>admin/view-blog/"><button type="button" class="btn btn-success">Back To Table</button><a>
		<!-- <button type="submit">Add Data</button> -->
		<!-- <button type="button">Add Data</button> -->

	</div>

</form>

</div>
	
 

<style> .error{ color:red; } </style>



                
                </main>
              