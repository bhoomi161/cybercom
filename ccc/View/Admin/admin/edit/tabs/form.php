<?php
	$admin=$this->getTableRow();
?>
<p class="h2"><?php echo $this->getTitle(); ?></p>

<form method="POST" id="form" action="<?php echo $this->getUrl()->getUrl('save','Admin'); ?>">
	<div class="font-weight-bold">
		<div class="row" style="margin-left: 100px; margin-top: 30px;">
			<div class="form-group col-sm-6">

				<label for="userName">Username</label>
				<input type="text" name="admin[UserName]" class="form-control" id="categoryName" value="<?php echo $admin->userName; ?>">
				
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control" id="password"  value="<?php echo $admin->password; ?>">
				
				<label for="status">Status</label>
				<select name="admin[status]" class="form-control">
					<?php foreach ($admin->getStatusOptions() as $key => $value) {?>
						<option value="<?php echo $key ?>"<?php if($admin->status==$key):?> selected <?php endif ?>><?php  echo $value;?></option>
					<?php } ?>
				</select>
				
				<button type="button" class="btn btn-success btn-lg" style="margin-top: 10px; margin-left: 200px;" onclick="object.resetParams().setForm('#form').load();">Save</button>
			</div>
		</div>
	</div>
</form>
