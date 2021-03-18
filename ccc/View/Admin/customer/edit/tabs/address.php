<?php 
    $shippingAddress = $this->getShippingAddress();
    $billingAddress = $this->getBillingAddress();
?>
<p class="h2"><?php echo $this->getTitle(); ?></p>

<form method="post" id="form" action="<?php echo $this->getUrl()->getUrl('save','Customer\Address'); ?>">
    <input type="hidden" name="shippingId" <?php if($shippingAddress):?> value="<?php echo $shippingAddress->addressId; endif?>">
    <input type="hidden" name="billingId" <?php if($billingAddress):?> value="<?php echo $billingAddress->addressId; endif?>">

    <div class="main font-weight-bold">
    <div class="row" style="margin-left: 100px; margin-top: 30px;">
		<div class="form-group col-sm-6">
        <h4>Billing Address</h4>

                    <label>Address</label>
                    <input type="text" class="form-control" name="billing[address]" id="address"
                    <?php if($billingAddress):?>value="<?php echo $billingAddress->address; endif?>">
                
                
                    <label>City</label>
                    <input type="text" class="form-control" name="billing[city]" id="city"
                    <?php if($billingAddress):?>    value="<?php echo $billingAddress->city; endif?>">
               

            
                    <label>State</label>
                    <input type="text" class="form-control" name="billing[state]" id="lastName"
                    <?php if($billingAddress):?> value="<?php echo $billingAddress->state; endif?>">
                
                    <label>Zip Code</label>
                    <input type="number" class="form-control" name="billing[zipCode]" id="zipCode"
                    <?php if($billingAddress):?>   value="<?php echo $billingAddress->zipCode; endif ?>">
               

            
                    <label>Country</label>
                    <input type="text" class="form-control" name="billing[country]" id="country"
                    <?php if($billingAddress):?> value="<?php echo $billingAddress->country; endif?>">
            
                </div>
            </div>
    
    <div class="row" style="margin-left: 100px; margin-top: 30px;">
		<div class="form-group col-sm-6">
        <h4>Shiiping Address</h4>
                    <label>Address</label>
                    <input type="text" class="form-control" name="shipping[address]" id="address"
                    <?php if($shippingAddress):?> value="<?php echo $shippingAddress->address; endif ?>">
                
                    <label>City</label>
                    <input type="text" class="form-control" name="shipping[city]" id="city"
                    <?php if($shippingAddress):?>  value="<?php echo $shippingAddress->city; endif?>">

        
                    <label>State</label>
                    <input type="text" class="form-control" name="shipping[state]" id="lastName"
                    <?php if($shippingAddress):?>  value="<?php echo $shippingAddress->state; endif?>">
             
                    <label>Zip Code</label>
                    <input type="number" class="form-control" name="shipping[zipCode]" id="zipCode"
                    <?php if($shippingAddress):?> value="<?php echo $shippingAddress->zipCode; endif?>">
          

           
                    <label>Country</label>
                    <input type="text" class="form-control" name="shipping[country]" id="country"
                    <?php if($shippingAddress):?> value="<?php echo $shippingAddress->country;endif ?>">
                </div>
                </div>
  
        <button type="button" class="btn btn-success btn-lg" style="margin-top: 10px; margin-left: 300px;" onclick="object.resetParams().setForm('#form').load();">Save</button>
</form>
