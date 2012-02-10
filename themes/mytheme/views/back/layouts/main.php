<!DOCTYPE html>
<html><head>
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta charset="UTF-8">
<meta name="description" content="" />
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.snippet.min.js"></script>                         <!-- SNIPPET -->
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/kickstart.js"></script>                                  <!-- KICKSTART -->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/cms/css/kickstart.css" media="all" />                  <!-- KICKSTART -->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/cms/css/style.css" media="all" />                          <!-- CUSTOM STYLES -->
</head><body><a id="top-of-page"></a>
<?php // print_r(Yii::app()); ?>
<div id="header">
	 	<div class="left">
	 		<a href="<?php echo Yii::app()->homeUrl; ?>"><img name="<?php echo CHtml::encode(Yii::app()->name); ?>" src="<?php echo Yii::app()->theme->baseUrl; ?>/cms/images/logo.png" /></a>
	 	</div>
	 	<div class="right">    		
    		<div class="header_menu">
    		<?php 
    		if(Yii::app()->user->isGuest){
    			//echo CHtml::link('Login',array('/site/login'));     			
    		}else{
    			echo '<a href="">My Account</a>  | ';
    			echo CHtml::link('Preview', Yii::app()->baseUrl, array('target'=>'_blank') ).' | '; 
    			echo CHtml::link('Logout ['.Yii::app()->user->name.']', array('/site/logout')); 
    			
    		}
    		?> 
    		</div>
    		
	 	</div>
	 	<div class="clearfix"></div>
	 	<?php if(Yii::app()->user->isGuest){ 
	 	
	 	}else{ ?>
	 	<!-- Menu Horizontal -->
	 	<div class="menu">
	 	<?php $this->widget('zii.widgets.CMenu',array(
                    'items'=>array(
                        array('label'=>'Dashboard', 'url'=>array('/site/index')),
                        array('label'=>'Catalog', 'url'=>array(''), 'items'=>array(
				            array('label'=>'Category', 'url'=>array('category/index')),
				        )),
                        array('label'=>'Contact', 'url'=>array('/site/contact')),                        
                    ),
                )); ?>
         </div>
         <?php } ?>
         
</div>
<?php if(isset($this->breadcrumbs) && !Yii::app()->user->isGuest):?>
 <!--<div style="width: 97%; margin: 0 auto;"> -->
	 
		<?php /*$this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		));*/ ?><!-- breadcrumbs -->
		 
	
<!-- </div>
 <div class="clearfix"></div> -->
 <?php endif?>

<div id="wrap" class="clearfix">
<!-- ===================================== END HEADER ===================================== -->


	<!-- 
	
		ADD YOU HTML ELEMENTS HERE
		
		Example: 2 Columns
	 -->
	 
	 
	 
	 <?php echo $content; ?>
	 



<!-- ===================================== START FOOTER ===================================== -->
<div class="clear"></div>
<div id="footer">
&copy; Copyright 2012 All Rights Reserved. 
<a id="link-top" href="#top-of-page">Top</a>
</div>

</div><!-- END WRAP -->
</body></html>