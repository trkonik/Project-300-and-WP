
            <div id="layoutSidenav_content">
                <main>

 

<div class="col-md-6 offset-3">

		<br>

		<h4>Add User</h4>
<form action="" method="post" enctype="multipart/form-data" >


	<?=$this->session->flashdata('message');?>
	
	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Name" value="<?=set_value('NAME')?>" name="NAME"  >

	</div>

	<div class="error"><?=form_error('NAME')?></div>


	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Email" value="<?=set_value('EMAIL')?>"  name="EMAIL"  >

	</div>

	<div class="error"><?=form_error('EMAIL')?></div>

	
	<div class="form-group">

		<input type="password" class="form-control" placeholder="Enter password" value="<?=set_value('PASSWORD')?>"  name="PASSWORD"   >

	</div>

		<div class="error"><?=form_error('PASSWORD')?></div>


			<div class="form-group">

		<input type="password" class="form-control" placeholder="Enter Confirm password" value="<?=set_value('C-PASSWORD')?>"  name="C-PASSWORD"   >

	</div>

		<div class="error"><?=form_error('C-PASSWORD')?></div>


	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Blood Group" value="<?=set_value('BLOOD-GROUP')?>"  name="BLOOD-GROUP" >

	</div>

	<div class="error"><?=form_error('BLOOD-GROUP')?></div>



	<div class="form-group">

		<input type="text" class="form-control" placeholder="Weight" value="<?=set_value('WEIGHT')?>"  name="WEIGHT"   >

	</div>

		<div class="error"><?=form_error('WEIGHT')?></div>


			<div class="form-group">

		<input type="date" class="form-control" placeholder="Enter Your DOB" value="<?=set_value('DOB')?>"  name="DOB"   >

	</div>

		<div class="error"><?=form_error('DOB')?></div>

		<div class="form-group">

		<input type="text" class="form-control" placeholder="Type" value="<?=set_value('TYPE')?>"  name="TYPE"   >

	</div>

		<div class="error"><?=form_error('TYPE')?></div>



	<div class="form-group">

		<input type="submit"  name="submit" class="btn btn-success" value="Add data Now" > 
		<!-- <button type="submit">Add Data</button> -->
		<!-- <button type="button">Add Data</button> -->

	</div>

</form>

</div>
	
 

<style> .error{ color:red; } </style>



                
                </main>
              