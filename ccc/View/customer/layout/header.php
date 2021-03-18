<!DOCTYPE html>
<html>
<head>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="<?php echo $this->baseUrl('Skin/Admin/Js/jquery-3.5.1.min.js');?>"></script>
	  <script type="text/javascript" src="<?php echo $this->baseUrl('Skin/Admin/Js/Mage.js');?>"></script>
	  <script type="text/javascript" src="<?php echo $this->baseUrl('Skin/Admin/ckeditor.js');?>"></script>
    <script type="text/javascript" src="<?php echo $this->baseUrl('Skin/Admin/sample.js');?>"></script>


</head>
<nav class="navbar navbar-expand-md navbar-dark bg-secondary">
	<h4>QuestCom</h4> 
  	<div class="collapse navbar-collapse" style="margin-left: 500px;">
    <ul class="navbar-nav">
      <li class="nav-item">
       <a class="nav-link"  onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('gridHtml','Product');?>').resetParams().load();" href="javascript:void(0);">Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('gridHtml','Customer');?>').resetParams().load();" href="javascript:void(0);">Customer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('gridHtml','Category');?>').resetParams().load();" href="javascript:void(0);">Category</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('gridHtml','Payment');?>').resetParams().load();" href="javascript:void(0);">Payment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('gridHtml','Shipment');?>').resetParams().load();" href="javascript:void(0);">Shipment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('gridHtml','Admin');?>').resetParams().load();" href="javascript:void(0);">Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('gridHtml','CustomerGroup');?>').resetParams().load();" href="javascript:void(0);">Customer Group</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('gridHtml','Attribute');?>').resetParams().load();" href="javascript:void(0);">Attribute</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('gridHtml','CmsPage');?>').resetParams().load();" href="javascript:void(0);">CMS Pages</a>
      </li>
    </ul>
  </div>
</nav>

<script type="text/javascript">
var object = new Base();
</script>
