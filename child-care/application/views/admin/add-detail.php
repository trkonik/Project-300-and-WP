<div class="col-md-6 offset-3">
	</br>
	<h4>Add detail</h4>
<form action="" method="post" enctype="multipart/form-data" >
	<?=$this->session->flashdata('message');?>
	
	<div class="form-group">

	<!--<input type="text" class="form-control" placeholder="VITAMIN_ID" value="<?=set_value('VITAMIN_ID')?>" name="VITAMIN_ID">-->
	<select name="VITAMIN_ID" class="form-control">
		<option value=""></option>
		<option value=""></option>
		<?php foreach($vitamins as $detail){ ?>
			<option <?php if(set_value('VITAMIN_ID')==$detail['V_ID']){ echo 'selected';}?> value="<?=$detail['V_ID']?>"><?=$detail['VITAMIN_NAME']?></option>	
		<?php } ?>
	</select>
	
	</div>

	<div class="error"><?=form_error('VITAMIN_ID')?></div>


	<div class="form-group">

	<!--<input type="text" class="form-control" placeholder="ORGAN_ID" value="<?=set_value('ORGAN_ID')?>"  name="ORGAN_ID">-->
	<select name="ORGAN_ID" class="form-control">
		<option value=""></option>
		<option value=""></option>
		<?php foreach($organs as $detail){ ?>
			<option <?php if(set_value('ORGAN_ID')==$detail['O_ID']){ echo 'selected';} ?> value="<?=$detail['O_ID']?>"><?=$detail['ORGAN_NAME']?></option>
			<?php } ?>
	</select>
	</div>

	<div class="error"><?=form_error('ORGAN_ID')?></div>

	<div class="form-group">

	<!--<input type="text" class="form-control" placeholder="SYMPTOM_ID" value="<?=set_value('SYMPTOM_ID')?>" name="SYMPTOM_ID">-->
	<select name="SYMPTOM_ID" class="form-control">
		<option value=""></option>
		<option value=""></option>
		<?php foreach($symptoms as $detail){ ?>
			<option <?php if(set_value('SYMPTOM_ID')==$detail['SYM_ID']){ echo 'selected';} ?> value="<?=$detail['SYM_ID']?>"><?=$detail['SYM_NAME']?></option>
			<?php } ?>
	</select>
	</div>

	<div class="error"><?=form_error('SYMPTOM_ID')?></div>



	<div class="form-group">

		<input type="text" class="form-control" placeholder="DESCRIPTION" value="<?=set_value('DESCRIPTION')?>"  name="DESCRIPTION"   >

	</div>

		<div class="error"><?=form_error('DESCRIPTION')?></div>
	
	<div class="form-group">

		<input type="text" class="form-control" placeholder="NUTRITION" value="<?=set_value('NUTRITION')?>"  name="NUTRITION"   >

	</div>

		<div class="error"><?=form_error('NUTRITION')?></div>

	<div class="form-group">

		<input type="submit"  name="submit" class="btn btn-success" value="Add Detail" > 
		<!-- <button type="submit">Add Data</button> -->
		<!-- <button type="button">Add Data</button> -->

	</div>

</form>
</div>
</div>
