<?php

$attributes = $this->getAttributes();
$attributeData = $this->getAttribute();
?>
<p class="h2"><?php echo $this->getTitle(); ?></p>

 <form method="POST" id="form" action="<?php echo $this->getUrl()->getUrl('save','Category\Attribute'); ?>">
 <div class="font-weight-bold">
		<div class="row" style="margin-left: 100px; margin-top: 30px;">
			<div class="form-group col-sm-6">
	
<?php if($attributes): ?>

    <?php  foreach($attributes->getData() as $key=>$attribute): ?>
        <?php $option = $attribute->getOptions(); ?>

        <?php if( $attribute->inputType == 'text'):?>
        <br><br>
             <label><?php echo $attribute->name;?></label>
             <input type="<?php echo $attribute->inputType; ?>" class="form-control" name="<?php echo $attribute->code;?>" value="<?php echo $attributeData->{$attribute->name};?>">   
        <?php endif; ?>

        <?php  if( $attribute->inputType == 'textarea'):?>
             <br><br><label><?php echo $attribute->name; ?></label>
             <textarea class="form-control"  name="<?php echo $attribute->code;?>" rows="5" cols="20">
                <?php echo $attributeData->{$attribute->name};?>
             </textarea> 
        <?php endif; ?>

    <?php if ($option): ?>
        <?php if ($attribute->inputType == 'checkbox') : ?>
           <br><br> <label><?php echo $attribute->name; ?></label>

        <?php foreach ($option->getData() as $key => $option) : ?>
                <input type="<?php echo $attribute->inputType; ?>"
                 value="<?php echo $option->name; ?>" 
                 name="<?php echo $attribute->name;?>[]" 
                 <?php $attributeData1 = explode(',', $attributeData->{$attribute->name}); ?> 
                 <?php foreach ($attributeData1 as $key => $row) : ?> 
                 <?php if ($row == $option->name) : ?> checked
                     <?php endif; ?>
                     <?php endforeach; ?>>
                <label><?php echo $option->name; ?></label>
        <?php endforeach; ?>
    <?php endif; ?>
    <?php endif; ?>

    <?php if ($option): ?>
        <?php if ($attribute->inputType == 'select') : ?>
           <br><br> <label><?php echo $attribute->name; ?></label>
        <<?php echo $attribute->inputType; ?> name="<?php echo $attribute->name; ?>">
                <?php foreach ($option->getData() as $key => $name) : ?>
                    <option value="<?php echo $name->name; ?>"
                    <?php  if($name->name == $attributeData->{$attribute->name}): ?>selected <?php endif; ?>>
                    <?php echo $name->name;?></option>
                <?php endforeach; ?>
            </<?php echo $attribute->inputType; ?>>
        <?php endif; ?>
    <?php endif; ?>

        <?php if($attribute->inputType == 'selectmultiple'):?>
            <br><br><label><?php echo $attribute->name; ?></label>
            <select class="form-control" name="<?php echo $attribute->name; ?>[]" multiple>
        <?php if($option):
            foreach ($option->getData() as $key => $option) : ?>
                <option value="<?php echo $option->name; ?>"
                <?php $attributeData1 = explode(',', $attributeData->{$attribute->name}); ?> <?php foreach ($attributeData1 as $key => $row) : ?> <?php if ($row == $option->name) : ?> selected <?php endif; ?> <?php endforeach; ?>><?php echo $option->name; ?></option>
            <?php endforeach;  endif;?></select> <?php endif;?>

        <?php if ($option) : ?>
             <?php if ($attribute->inputType == 'radio') : ?>
                <br><br><label><?php echo $attribute->name; ?></label>
                 <?php foreach ($option->getData() as $key => $option) : ?>
                     <input type="<?php echo $attribute->inputType; ?>" value="<?php echo $option->name; ?>" name="<?php echo $attribute->code ?>" <?php if($name->name = $attributeData->{$attribute->name}): ?>checked <?php endif; ?>>
                    <label><?php echo $option->name; ?></label>
                <?php endforeach;?>
            <?php endif; ?>
        <?php endif; ?>
        
<?php endforeach; ?>
<?php endif;?>

<button type="button" class="btn btn-success btn-lg" style="margin-top:20px; margin-left:200px;" onclick="object.resetParams().setForm('#form').load();">Save</button>
</div>
</div>
</div>
 </form>
