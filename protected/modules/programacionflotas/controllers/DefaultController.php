<?php

class DefaultController extends Controller
{
        public $layout='/layouts/menu';
	public function actionIndex()
	{   
                
		$this->render('index');
	}
        
        public function actionError()
        {
            if($error=Yii::app()->errorHandler->error)
            {
                    if(Yii::app()->request->isAjaxRequest)
                            echo $error['message'];
                    else {
                   // $this->layout='main';
                        $this->render('error', $error);
                    }

            }
        }
}