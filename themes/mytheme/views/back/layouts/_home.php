<?php $this->beginContent('//layouts/main'); ?>

<div class="col_9">

<?php echo $content; ?>
</div>
<div class="col_3">
<h5>Sidebar</h5>
<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
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