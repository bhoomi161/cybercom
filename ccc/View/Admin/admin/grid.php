<?php 
 $admins=$this->getAdmins();
 ?>
<button class="btn btn-success" style="margin-top: 20px;" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('form','Admin',[],false);?>').resetParams().load();">Add Admin</button>
	<table border="1" class="table table-striped" style="margin-top: 30px;">
		<thead class="bg-secondary text-white">
			<tr>
				<th>Admin Id</th>
				<th>Username</th>
				<th>Password</th>
				<th>Status</th>
				<th>Created Date</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php if($admins):
				foreach ($admins->getData() as $key => $admin): ?> 
                    <tr>
                        <td><?php echo $admin->adminId; ?></td>
                        <td><?php echo $admin->userName; ?></td>
                        <td><?php echo $admin->password; ?></td>
                        <td><?php if($admin->status == 1):?><button class="btn btn-success">Enable</button><?php  else: ?> <button class="btn btn-warning">Disable</button><?php endif?></td>
                        <td><?php echo $admin->createdDate; ?></td>
                        <td>
						<button class="btn btn-success" style="margin-top: 20px;" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('form','Admin',['updateId'=>$admin->adminId]);?>').resetParams().load();">Update</button>
						<button class="btn btn-danger"  style="margin-top: 20px;" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('delete','Admin',['deleteId'=>$admin->adminId]);?>').resetParams().load();">Delete</button>

                        </td>
                    </tr>
            <?php endforeach; endif ?>
		</tbody>
	</table>
</body>
</html>
