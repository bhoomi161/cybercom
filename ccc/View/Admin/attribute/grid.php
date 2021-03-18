<?php
$attributes = $this->getAttributes();
?>
<button class="btn btn-success" style="margin-top: 20px;" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('form','Attribute',[],false);?>').resetParams().load();">Add Attribute</button>
<table border="1" class="table table-striped" style="margin-top: 30px;">
		<thead class="bg-secondary text-white">
			<tr>
                    <th>Attribute Id</th>
                    <th>Entity Type Id</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Input Type</th>
                    <th>Backend Type</th>
                    <th>sortOrder</th>
                    <th>Backend Model</th>
                    <th>Actions</th>
             </tr>
             </thead>
            <tbody>
                <?php if ($attributes): 
                    foreach ($attributes->getData() as $key => $attributes) :?>
                <tr>
                    <td><?php echo $attributes->attributeId; ?></td>
                    <td><?php echo $attributes->entityTypeId; ?></td>
                    <td><?php echo $attributes->name; ?></td>
                    <td><?php echo $attributes->code; ?></td>
                    <td><?php echo $attributes->inputType; ?></td>
                    <td><?php echo $attributes->backendType; ?></td>
                    <td><?php echo $attributes->sortOrder; ?></td>
                    <td><?php echo $attributes->backendModel; ?></td>

                    <td>
                        <button class="btn btn-primary" style="margin-top: 20px;"
                            onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('form','Attribute',['updateId'=>$attributes->attributeId]);?>').resetParams().load();">Update</button>
                        <button class="btn btn-danger" style="margin-top: 20px;"
                            onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('delete','Attribute',['deleteId'=>$attributes->attributeId]);?>').resetParams().load();">Delete</button>
                    </td>
                </tr>
                <?php endforeach; endif ?>
            </tbody>

            </table>
</body>
</html>
