<?php

class GreetingController extends Controller
{
	public $message = '';
	public $description = 'This is a description';
	
	public function actionIndex()
	{
		$message = Message::model()->findByPk(5);
		$this->message = $message->content;
		$this->render('index', array(
			'content'=>$this->message,
			'desc'=>$this->description
		));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}