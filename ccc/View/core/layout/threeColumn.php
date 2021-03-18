
<body>
<table width="100%">
<tr>
	<td colspan="3"><?php echo $this->getChild('header')->toHtml(); ?>
	<?php echo $this->createBlock('Block\Core\Layout\Message')->toHtml(); ?>
</td>
</tr>
<tr>	

	<td><?php echo $this->getChild('left')->toHtml(); ?></td>
	<td><?php echo $this->getChild('content')->toHtml(); ?></td>
	<td></td>
</tr>

<tr>
	<td colspan="3"><?php echo $this->getChild('footer')->toHtml(); ?></td>	
</tr>

</table>
</body>

</html>




