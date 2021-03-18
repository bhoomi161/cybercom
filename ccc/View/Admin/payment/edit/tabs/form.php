<?php 
	$payment=$this->getTableRow();
?>
<p class="h2"><?php echo $this->getTitle(); ?></p>

<form method="POST" id="form" action="<?php echo $this->getUrl()->getUrl('save','payment'); ?>">
<div class="font-weight-bold">

<div class="row" style="margin-left: 100px; margin-top: 30px;">
	<div class="form-group col-sm-6">
		<label for="name">Name</label>
		<input type="text" name="payment[name]" id="name" value="<?php echo $payment->name; ?>" class="form-control">
			
		<label for="description">Description</label>
		<textarea class="form-control" id="description" name="payment[description]"><?php echo $payment->description; ?></textarea>
			
		<label for="status">Status</label>
		<select name="payment[status]" class="form-control">
			<?php foreach ($payment->getStatusOptions() as $key => $value):?>
				<option value="<?php echo $key ?>"<?php if($payment->status==$key):?> selected <?php endif ?>><?php  echo $value;?></option>
			<?php endforeach ?>
		</select>
		<button type="button" class="btn btn-success btn-lg" style="margin-top: 20px; margin-left:200px;" onclick="object.resetParams().setForm('#form').load();">Save</button>
			
	</div>
</div>
</div>
