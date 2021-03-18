<?php 
 $customer=$this->getTableRow(); 
 $group =$this->getGroupOptions();
 
 ?>
<p class="h2"><?php echo $this->getTitle(); ?></p>

<form method="POST" id="form" action="<?php echo $this->getUrl()->getUrl('save','customer'); ?>">

 <div class="font-weight-bold">
 <div class="form-row" style="margin-left: 250px; margin-top: 50px;">

<div class="form-group col-md-6">
    <label for="Customer group">Customer Group</label>
    <select class="form-control" name="customer[customerGroup]">
                    <?php foreach($group as $groupId => $name): ?>
                    <option value="<?php echo $groupId; ?>" <?php if ($customer->groupId == $groupId): ?> selected
                        <?php endif ?>>
                        <?php echo $name; ?></option>
                    <?php endforeach ?>
                </select>
    
        <label for="firstname">Firstname</label>
        <input type="text" name="customer[firstName]"  class="form-control" id="firstName" value="<?php echo $customer->firstName; ?>">
   
        <label for="lastname">Lastname</label>
	    <input type="text" name="customer[lastName]" class="form-control" id="lastName"  value="<?php echo $customer->lastName; ?>">
	
	    <label for="email">Email</label>
	    <input type="email" name="customer[email]" id="email" class="form-control" value="<?php echo $customer->email; ?>">
	
	    <label for="password">Password</label>
	    <input type="password" name="password" class="form-control" id="password"  value="<?php echo $customer->password; ?>">
	
    <label for="status">Status</label>
    <select name="product[status]" class="form-control">
				<?php foreach ($customer->getStatusOptions() as $key => $value):?>
					<option value="<?php echo $key ?>"<?php if($customer->status==$key){?> selected <?php } ?>><?php  echo $value;?></option>
				<?php endforeach ?>
	</select>
	
        <label for="mobile">Mobile</label>
        <input type="number" name="customer[mobile]" class="form-control" id="mobile"  value="<?php echo $customer->mobile; ?>">
        
         <button type="button" class="btn btn-success btn-lg" style="margin-top: 30px; margin-left:150px;" onclick="object.resetParams().setForm('#form').load();">Save</button>
    </div>
</div>
</div>
</form>