<?php 
	$shipment=$this->getTableRow(); 
?>
<p class="h2"><?php echo $this->getTitle(); ?></p>

<form method="POST" id="form" action="<?php echo $this->getUrl()->getUrl('save','Shipment'); ?>">
<div class="font-weight-bold">

	<div class="row" style="margin-left: 100px; margin-top: 30px;">

	<div class="form-group col-sm-6">
		<label for="name">Name</label>
		<input type="text" name="shipment[name]" id="code" value="<?php echo $shipment->name; ?>" class="form-control">
			
		<label for="amount">Amount</label>
		<input type="text" name="shipment[amount]" id="amount" value="<?php echo $shipment->amount; ?>" class="form-control">
			
		<label for="description">Description</label>
		<textarea id="description" name="shipment[description]" class="form-control"><?php echo $shipment->description; ?></textarea>
			
		<label for="status">Status</label>
		<select name="shipment[status]" class="form-control">
			<?php foreach ($shipment->getStatusOptions() as $key => $value):?>
				<option value="<?php echo $key ?>"<?php if($shipment->status==$key):?> selected <?php endif ?>><?php  echo $value;?></option>
			<?php endforeach ?>
		</select>

		<button type="button" class="btn btn-success btn-lg" style="margin-top: 20px; margin-left: 200px;" onclick="object.resetParams().setForm('#form').load();">Save</button>
	</div>
</div>
</div>
