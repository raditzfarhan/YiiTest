<!DOCTYPE html>
<html><head>
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta charset="UTF-8">
<meta name="description" content="" />
<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script> -->
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.snippet.min.js"></script>                         <!-- SNIPPET -->
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/kickstart.js"></script>                                  <!-- KICKSTART -->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/site/css/kickstart.css" media="all" />                  <!-- KICKSTART -->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/site/css/style.css" media="all" />                          <!-- CUSTOM STYLES -->
</head><body><a id="top-of-page"></a>
<?php  ?>
<div id="header">
	 	<div class="left">
	 		<a href="index.php"><img name="<?php echo CHtml::encode(Yii::app()->name); ?>" src="<?php echo Yii::app()->theme->baseUrl; ?>/site/images/logo.png" /></a>
	 	</div>
	 	<div class="right">    		
    		<div class="header_menu">
    		<?php 
    		if(Yii::app()->user->isGuest){
    			echo CHtml::link('Login',array('/site/login'));     			
    		}else{
    			echo CHtml::link('Logout ['.Yii::app()->user->name.']', array('/site/logout')); 
    			echo ' | <a href="">My Account</a>';
    		}
    		?> 
    		| <a href="">Shopping Cart</a>  | <a href="">Checkout</a> </div>
    		<input id="text2" type="text" placeholder="Search" class="search" />
	 	</div>
	 	<div class="clearfix"></div>
	 	
	 	<!-- Menu Horizontal -->
	 	<div class="menu">
	 	<?php $this->widget('zii.widgets.CMenu',array(
                    'items'=>array(
                        array('label'=>'Home', 'url'=>array('/site/index')),
                        array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                        array('label'=>'Contact', 'url'=>array('/site/contact')),
                        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                )); ?>
         </div>
		<!--<ul class="menu">
		<li class="current home"><a href=""><img src="images/home.png" /></a></li>
		<li><a href="">Mobile</a>
			<ul>
			<li><a href="">Apple</a></li>			
			<li><a href="">Samsung</a></li>
			<li><a href="">HTC</a></li>
			<li><a href="">Nokia</a></li>
			<li><a href="">Sony Ericsson</a></li>
			</ul>
		</li>
		<li><a href="">Clothes</a>
			<ul>
			<li><a href="">Men</a></li>
			<li><a href="">Women</a>
				<ul>
				<li><a href="">Top</a></li>
				<li><a href="">Dress</a></li>
				<li><a href="">Jeans</a></li>				
				</ul>
			</li>
			<li><a href="">Children</a></li>
			</ul>
		</li>
		<li><a href="">Item 4</a></li>
		</ul>
	 --></div>
<div id="wrap" class="clearfix">
<!-- ===================================== END HEADER ===================================== -->


	<!-- 
	
		ADD YOU HTML ELEMENTS HERE
		
		Example: 2 Columns
	 -->
	 
	 
	 <?php if(isset($this->breadcrumbs)):?>
	 <div class="col_12">
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	
	 <!--<ul class="breadcrumbs">
	 	<li><a href="">Home</a></li>
	 	<li><a href="">Current Page</a></li>
	 </ul>
	 </div>	 
	 -->
	 </div>
	 <?php endif?>
	 <?php echo $content; ?>
	 



<!-- ===================================== START FOOTER ===================================== -->
<div class="clear"></div>
<div id="footer">
&copy; Copyright 2012 All Rights Reserved. 
<a id="link-top" href="#top-of-page">Top</a>
</div>

</div><!-- END WRAP -->
</body></html>