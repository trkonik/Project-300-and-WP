
            <div id="layoutSidenav_content">
                <main>

 

<div class="col-md-6 offset-3">

		<br>

		<h4>Edit User</h4>
<form action="" method="post" enctype="multipart/form-data" >


	<?=$this->session->flashdata('message');?>
	
	<div class="form-group">
		
		<input type="text" class="form-control" placeholder="Enter Your Name" value="<?php if(set_value('NAME')){ echo set_value('NAME'); }else{ echo $user[0]['NAME']; }?>" name="NAME"  >
	
	</div>

	<div class="error"><?=form_error('NAME')?></div>


	<div class="form-group">

	<input type="text" class="form-control" placeholder="Enter Your Email" value="<?php if(set_value('EMAIL')){ echo set_value('EMAIL'); }else{ echo $user[0]['EMAIL']; }?>"  name="EMAIL"  >

	</div>

	<div class="error"><?=form_error('EMAIL')?></div>

	
	<div class="form-group">

	<input type="password" class="form-control" placeholder="Enter password" value="<?php if(set_value('PASSWORD')){ echo set_value('PASSWORD'); }else{ echo $user[0]['PASSWORD']; }?>"  name="PASSWORD"   >

	</div>

		<div class="error"><?=form_error('PASSWORD')?></div>


			<div class="form-group">

			<input type="password" class="form-control" placeholder="Enter Confirm password" value="<?php if(set_value('C-PASSWORD')){ echo set_value('C-PASSWORD'); }else{ echo $user[0]['PASSWORD']; }?>"  name="C-PASSWORD"   >

	</div>

		<div class="error"><?=form_error('C-PASSWORD')?></div>


	<div class="form-group">

	<input type="text" class="form-control" placeholder="Enter Your Blood Group" value="<?php if(set_value('BLOOD-GROUP')){ echo set_value('BLOOD-GROUP'); }else{ echo $user[0]['BLOOD-GROUP']; }?>"  name="BLOOD-GROUP"   >

	</div>

	<div class="error"><?=form_error('BLOOD-GROUP')?></div>



	<div class="form-group">

	<input type="text" class="form-control" placeholder="Enter Your Weight" value="<?php if(set_value('WEIGHT')){ echo set_value('WEIGHT'); }else{ echo $user[0]['WEIGHT']; }?>"  name="WEIGHT"   >

	</div>

		<div class="error"><?=form_error('WEIGHT')?></div>


			<div class="form-group">

			<input type="text" class="form-control" placeholder="Enter Your Date of Birth" value="<?php if(set_value('DOB')){ echo set_value('DOB'); }else{ echo $user[0]['DOB']; }?>"  name="DOB" >

	</div>

		<div class="error"><?=form_error('DOB')?></div>
		<div class="form-group">

		<input type="text" class="form-control" placeholder="Type" value="<?=set_value('TYPE')?>"  name="TYPE"   >

	</div>

		<div class="error"><?=form_error('TYPE')?></div>

	<div class="form-group">

		<input type="submit"  name="submit" class="btn btn-success" value="Edit data Now" > 
		<a href="<?=base_url()?>admin/view-user/"><button type="button" class="btn btn-success">Back To Table</button><a>
		<!-- <button type="submit">Add Data</button> -->
		<!-- <button type="button">Add Data</button> -->

	</div>

</form>

</div>
	
 

<style> .error{ color:red; } </style>



                
                </main>
              