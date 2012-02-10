<?php $this->beginContent('//layouts/main'); ?>

<div class="col_9">
<!-- Slideshow -->
<?php $this->widget('Slideshow'); ?>


<!-- Tabs Left -->
<ul class="tabs left">
<li><a href="#tabr1">Best Seller</a></li>
<li><a href="#tabr2">Hot</a></li>
<li><a href="#tabr3">Latest</a></li>
</ul>

<div id="tabr1" class="tab-content">Tab1</div>
<div id="tabr2" class="tab-content">Tab2</div>
<div id="tabr3" class="tab-content">Tab3</div>

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