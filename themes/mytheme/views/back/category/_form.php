<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'category-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<fieldset>
	<legend>General</legend>
	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alias'); ?>
		<?php echo $form->textField($model,'alias',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'alias'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'parent_id'); ?>
		<?php echo $form->textField($model,'parent_id'); ?>
		<?php echo $form->error($model,'parent_id'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'sort_order'); ?>
		<?php echo $form->textField($model,'sort_order'); ?>
		<?php echo $form->error($model,'sort_order'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Published?'); ?>
		<?php //echo $form->textField($model,'status'); ?>
		<?php echo '<br/>Yes'?>
		<?php echo $form->radioButton($model, 'status', array('value'=>1)); ?>
		<?php echo '&nbsp; No'; ?>
		<?php echo $form->radioButton($model, 'status', array('value'=>0)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>
	
	
	</fieldset>
	
	<ul class="tabs left">
	<li><a href="#tabr1">Description</a></li>
	<li><a href="#tabr2">Image</a></li>
	<li><a href="#tabr3">Misc</a></li>
	</ul>
	
	<div id="tabr1" class="tab-content">
	<div class="row">
		<?php echo $form->labelEx($model,'desc'); ?>
		
		<?php echo $form->error($model,'desc'); ?>
		<?php 
		/*$this->widget('ext.editMe.ExtEditMe', array(
		    'model'=>$model,
		    'attribute'=>'attribute',
		    'htmlOptions'=>array('option'=>'value'),		    
		    
		));*/
		
		$this->widget('application.extensions.elrte.elRTE', array(
		    'selector'=>'Category_desc',
		    'cssClass' => 'el-rte',
		    'absoluteURLs' => 'false',
		    'allowSource' => 'true',		    
		    'styleWithCSS' => 'true',
		    'height' => '200',
		    'width' => '900',
		    'fmAllow' => 'true',
		    'toolbar' => 'myToolbar',
			
		 ));
		?>
		<?php echo $form->textArea($model,'desc',array('rows'=>6, 'cols'=>50)); ?>
	</div>
	</div>
	<div id="tabr2" class="tab-content">
	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->textField($model,'image',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>
	</div>
	<div id="tabr3" class="tab-content">
	<div class="row">
		<?php echo $form->labelEx($model,'metakey'); ?>
		<?php echo $form->textArea($model,'metakey',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'metakey'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metadesc'); ?>
		<?php echo $form->textArea($model,'metadesc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'metadesc'); ?>
		
		
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'date_added'); ?>
		<?php echo $form->textField($model,'date_added'); ?>
		<?php echo $form->error($model,'date_added'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_modified'); ?>
		<?php echo $form->textField($model,'date_modified'); ?>		
		<?php echo $form->error($model,'date_modified'); ?>
	</div>
	</div>

	

	

	

	

	

	

	

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->