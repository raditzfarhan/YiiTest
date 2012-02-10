<?php $this->beginContent('//layouts/main'); ?>
<div class="col_9">
<?php echo $content; ?>
</div>
<div class="col_3">
<?php
	$this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>'Operations',
	));
	$this->widget('zii.widgets.CMenu', array(
	'items'=>$this->menu,
	));
	$this->endWidget();
?>                 
</div>

<?php $this->endContent(); ?>