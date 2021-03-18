
<body>
<table width="100%">
<tr>
	<td><?php echo $this->getChild('header')->toHtml(); ?>

</td>
</tr>
<tr>
	<td>
	<?php echo $this->createBlock('Block\Customer\Layout\Message')->toHtml(); ?>
	<?php echo $this->getChild('content')->toHtml(); ?>
	</td>
</tr>

<tr>
	<td><?php echo $this->getChild('footer')->toHtml(); ?></td>	
</tr>

</table>
</body>

</html>




