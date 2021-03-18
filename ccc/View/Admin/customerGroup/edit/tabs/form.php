<?php $customerGroup=$this->getTableRow();
 ?>
<p class="h2"><?php echo $this->getTitle(); ?></p>

<form method="POST" id="form" action="<?php echo $this->getUrl()->getUrl('save','CustomerGroup'); ?>">
<div class="font-weight-bold">

<div class="row" style="margin-left: 100px; margin-top: 30px;">
	<div class="form-group col-sm-6">
    <label>Customer Group</label>
    <input type="text" class="form-control" name="customergroup[name]" id="name"
                    value="<?php echo $customerGroup->name; ?>">

    <label>Status</label>
    <select class="form-control" name="customergroup[status]">
        <?php foreach($customerGroup->getStatusOptions() as $key => $value): ?>
        <option value="<?php echo $key ?>" <?php if ($customerGroup->status == $key): ?> selected
             <?php endif ?>>
                <?php echo $value; ?></option>
                    <?php endforeach ?>
                </select>

            <button type="button" class="btn btn-success btn-lg" style="margin-top: 20px; margin-left: 150px;"
            onclick="object.resetParams().setForm('#form').load();">Save</button>     
    </div>
</div>
</div>
</form>    