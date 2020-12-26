
            <div id="layoutSidenav_content">
                <main>

 

<div class="col-md-6 offset-3">

		<br>

		<h4>Edit detail</h4>
<form action="" method="post" enctype="multipart/form-data" >


	<?=$this->session->flashdata('message');?>
	
	<div class="form-group">
		
	<!--<input type="text" class="form-control" placeholder="VITAMIN_ID" value="<?php if(set_value('VITAMIN_ID')){ echo set_value('VITAMIN_ID'); }else{ echo $detail[0]['VITAMIN_ID']; }?>" name="VITAMIN_ID" >-->
	<select name="VITAMIN_ID" class="form-control">
		<option value=""></option>
		<?php foreach($vitamins as $row){  ?>
			<option <?php if(set_value('VITAMIN_ID')==$row['V_ID']){ echo 'selected';}elseif($detail[0]['VITAMIN_ID']==$row['V_ID']){ echo 'selected'; }?> value="<?=$row['V_ID']?>"><?=$row['VITAMIN_NAME']?></option>
		<?php } ?>
	</select>	
		
	</div>

	<div class="error"><?=form_error('VITAMIN_ID')?></div>


	<div class="form-group">

	 
	<select name="ORGAN_ID" class="form-control">
	<option value=""></option>
	<?php foreach($organs as $row){ ?>
		<option <?php if(set_value('ORGAN_ID')==$row['O_ID']){ echo 'selected';}elseif($detail[0]['ORGAN_ID']==$row['O_ID']){ echo 'selected'; }?> value="<?=$row['O_ID']?>"><?=$row['ORGAN_NAME']?></option>
		<?php } ?>
	</select>
	</div>

	<div class="error"><?=form_error('ORGAN_ID')?></div>


	<div class="form-group">
	
	

	 <select name="SYMPTOM_ID" class="form-control">
		<option value=""></option>
		<?php foreach($symptoms as $row){ ?>
			<option <?php if(set_value('SYMPTOM_ID')==$row['SYM_ID']){ echo 'selected';}elseif($detail[0]['SYMPTOM_ID']==$row['SYM_ID']){ echo 'selected'; }?> value="<?=$row['SYM_ID']?>"><?=$row['SYM_NAME']?></option>
			<?php } ?>
	</select>

	</div>

	<div class="error"><?=form_error('SYMPTOM_ID')?></div>

	<div class="form-group">

	<input type="text" class="form-control" placeholder="DESCRIPTION" value="<?php if(set_value('DESCRIPTION')){ echo set_value('DESCRIPTION'); }else{ echo $detail[0]['DESCRIPTION']; }?>"  name="DESCRIPTION"   >

	</div>

	<div class="error"><?=form_error('DESCRIPTION')?></div>

	<div class="form-group">

	<div class="form-group">

	<input type="text" class="form-control" placeholder="NUTRITION" value="<?php if(set_value('NUTRITION')){ echo set_value('NUTRITION'); }else{ echo $detail[0]['NUTRITION']; }?>"  name="NUTRITION"   >

	</div>

	<div class="error"><?=form_error('NUTRITION')?></div>

		<input type="submit"  name="submit" class="btn btn-success" value="Edit Detail" > 
		<a href="<?=base_url()?>admin/view-detail/"><button type="button" class="btn btn-success">Back To Table</button><a>
		<!-- <button type="submit">Add Data</button> -->
		<!-- <button type="button">Add Data</button> -->

	</div>

</form>

</div>
	
 

<style> .error{ color:red; } </style>



                
                </main>
              