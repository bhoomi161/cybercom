<?php
$groupprice= $this->getCustomerGroup();

?>
<p class="h2"><?php echo $this->getTitle(); ?></p>

<form method="POST" id="form" action="<?php echo $this->getUrl()->getUrl('save','Product\GroupPrice'); ?>">
<table border="1" class="table table-striped" style="margin-top: 30px;">
	<thead class="bg-secondary text-white">
        <tr>
            <td>Group Id</td>
            <td>Name</td>
            <td>Price</td>
            <td>Group Price</td>
        </tr>
    </thead>
    <tbody>
        <?php if($groupprice): 
            foreach($groupprice->getData() as $key => $value):?>
            <tr>
        <?php  $rawstatus =($value->groupPrice)?'exist':'new'; ?>
                <td><?php echo $value->groupId; ?></td>
                <td><?php echo $value->name; ?></td>
                <td><?php echo $value->price;?></td>
                <td><input type="text" name="data[<?php echo $rawstatus;?>][<?php echo $value->groupId;?>]" value="<?php echo $value->groupPrice;?>"></td>
            </tr>
        <?php endforeach; endif ?>
    </tbody>
</table>
<button type="button" class="btn btn-success btn-lg" style="margin-top: 10px; margin-left: 400px;" onclick="object.resetParams().setForm('#form').load();">Save</button>
</form>
