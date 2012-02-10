<?php
$this->breadcrumbs=array(
	'Categories',
);

$this->menu=array(
	array('label'=>'Create Category', 'url'=>array('create')),
	array('label'=>'Manage Category', 'url'=>array('admin')),
	
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('category-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Categories</h3>

<?php /*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'template'=>'{summary}{sorter}<br />{pager}{items}{pager}',
    'enableSorting' => true,
    'sortableAttributes'=>array(
        'name'=>'By name',
    ),
    'enablePagination'	=> true,
    'itemsTagName' => 'table',

)); */ ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'category-grid',
	'dataProvider'=>$model->search(),
	'filter' => $model,
	'columns'=>array(
		'category_id',
		/*'image',
		'parent_id',*/
		'name',
		/*'alias',
		'desc',*/
		
		'sort_order',
		'status',
		/*'date_added',
		'date_modified',
		'metakey',
		'metadesc',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
	'enableSorting' => true,	
   
)); ?>

