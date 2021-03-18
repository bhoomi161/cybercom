<?php 
$option=$this->getOption();
?>
<p class="h2"><?php echo $this->getTitle(); ?></p>

<form method="POST" id="form" action="<?php echo $this->getUrl()->getUrl('save','Attribute\Option')?>">
<button type="button" class="btn btn-success" value="Update" onclick="object.resetParams().setForm('#form').load();">Update</button>
<button type="button" class="btn btn-success" onclick="addRow()">Add Option</button>
<table border="1" class="table table-striped" style="margin-top: 30px;">
		<thead class="bg-secondary text-white">
			<tr>
				<th>Name</th>
				<th>Sort Order</th>
				<th>Actions</th>
			</tr>
		</thead>
</table>
<table id="existingOption" border="1" class="table table-striped">
            <tbody>
                 <tr>
                <?php if($option) :
                    foreach ($option->getData() as $key => $option) : ?>
                    <td><input type="text" name="exist[<?php echo $option->optionId;?>][name]" value="<?php echo $option->name;?>"></td>
                    <td><input type="text" name="exist[<?php echo $option->optionId;?>][sortOrder]" value="<?php echo $option->sortOrder;?>"></td>
                    <td><input type="button"  class="btn btn-danger" name="removeOption" value="Remove" onclick="removeRow(this)"></td>
                </tr>
                <?php endforeach; endif  ?>
            </tbody>

            </table>
</form>

<div style="display:none">
        <table id="newOption">
            <tr>
                <td><input type="text" name="new[]"></td>
                <td><input type="text" name="new[]"></td>
                <td><input type="button"  class="btn btn-danger" name="removeOption" value="Remove" onclick="removeRow(this)"></td>
            </tr>

        </table>
</div>
<script>

function addRow(){
    var newOptionTable = document.getElementById('newOption');
    var existingOptionTable = document.getElementById('existingOption').children[0];

    existingOptionTable.prepend(newOptionTable.children[0].children[0].cloneNode(true));
}
function removeRow(button){
    var objTr = button.parentElement.parentElement;
    objTr.remove();
}
</script>