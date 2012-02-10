<?php 
class Slideshow extends CWidget {    	
	public function run(){ 		 		
		
		$banners = array(
			array('type'=>'image', 'content'=>'http://placehold.it/683x200/4D99E0/ffffff.png&text=683x200' ),
			array('type'=>'image', 'content'=>'http://placehold.it/683x200/75CC00/ffffff.png&text=683x200' ),
			array('type'=>'image', 'content'=>'http://placehold.it/683x200/E49800/ffffff.png&text=683x200' ),
			array('type'=>'text', 'content'=>'<div style="padding:10px;"><h3>Slide Anything</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
sed diam nonummy nibh euismod tincidunt <br/> ut laoreet dolore magna aliquam erat volutpat.</p></div>' )
		
		);
				
		$this->render('slideshow', array("banners"=>$banners,));
	}
}
?>