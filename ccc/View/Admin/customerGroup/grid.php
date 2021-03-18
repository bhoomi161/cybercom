<?php

$customerGroups = $this->getCustomerGroups();

?>
<button class="btn btn-success" style="margin-top: 20px;" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('form','CustomerGroup',[],false);?>').resetParams().load();">Add CustomerGroup</button>
<table border="1" class="table table-striped" style="margin-top: 30px;">
		<thead class="bg-secondary text-white">
			<tr>
                    <th>Group Id</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Created Date</th>
                    <th>Actions</th>
             </tr>
             </thead>
            <tbody>
                <?php if ($customerGroups):
               
                    foreach ($customerGroups->getData() as $key => $customerGroup):
                    ?>
                <tr>
                    <td><?php echo $customerGroup->groupId; ?></td>
                    <td><?php echo $customerGroup->name;?></td>
                    <td><?php if ($customerGroup->status == 1) {?>
                        <button class="btn btn-warning btn-sm">ENABLED</button>
                        <?php } else { ?>
                        <button class="btn btn-secondary btn-sm">DISABLED</button>
                        <?php } ?>
                    </td>
                    <td><?php echo $customerGroup->createdDate;?></td>
                    <td>
                        <button class="btn btn-primary" style="margin-top: 20px;"
                            onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('form','CustomerGroup',['updateId'=>$customerGroup->groupId]);?>').resetParams().load();">Update</button>
                        <button class="btn btn-danger" style="margin-top: 20px;"
                            onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('delete','CustomerGroup',['deleteId'=>$customerGroup->groupId]);?>').resetParams().load();">Delete</button>
                    </td>
                </tr>
                <?php  endforeach; endif ?>
            </tbody>

            </table>
</body>
</html>
