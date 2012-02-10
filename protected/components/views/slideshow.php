<ul class="slideshow" width="683" height="200">
<?php foreach($banners as $key=>$value): ?>
	<li>
		<?php if($value['type']=='image'): ?>
			<img src="<?php echo $value['content']; ?>" width="683" height="200" />
		<?php else: ?>
			<?php echo $value['content']; ?>
		<?php endif; ?>
	</li>
<?php endforeach; ?>
</ul>