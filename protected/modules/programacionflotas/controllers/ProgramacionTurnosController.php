<?php

class ProgramacionTurnosController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='/layouts/menu';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','GeneratePdf','GenerateExcel'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new ProgramacionTurnos;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ProgramacionTurnos']))
		{
			$model->attributes=$_POST['ProgramacionTurnos'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IdProgramacionTurno));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ProgramacionTurnos']))
		{
			$model->attributes=$_POST['ProgramacionTurnos'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IdProgramacionTurno));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex($id)
	{
                $SQL = "CALL AsignarPersonasProgramacion($id);";
                Yii::app()->db->createCommand($SQL)->execute();
                
            $session=new CHttpSession;
            $session->open();		
            $criteria = new CDbCriteria();            

                $model=new ProgramacionTurnos('search');
                $model->unsetAttributes();  // clear any default values

                if(isset($_GET['ProgramacionTurnos']))
		{
                        $model->attributes=$_GET['ProgramacionTurnos'];
                        $model->IdProgramacionSugerida=$id;
			
			
                   	
                       if (!empty($model->IdProgramacionTurno)) $criteria->addCondition("IdProgramacionTurno = '".$model->IdProgramacionTurno."'");
                     
                    	
                       if (!empty($model->IdProgramacionSugerida)) $criteria->addCondition("IdProgramacionSugerida = '".$model->IdProgramacionSugerida."'");
                     
                    	
                       if (!empty($model->IdFlota)) $criteria->addCondition("IdFlota = '".$model->IdFlota."'");
                     
                    	
                       if (!empty($model->IdClasificacionDia)) $criteria->addCondition("IdClasificacionDia = '".$model->IdClasificacionDia."'");
                     
                    	
                       if (!empty($model->FechaInicial)) $criteria->addCondition("FechaInicial = '".$model->FechaInicial."'");
                     
                    	
                       if (!empty($model->FechaFinal)) $criteria->addCondition("FechaFinal = '".$model->FechaFinal."'");
                     
                    			
                    $session['ProgramacionTurnos_records']=ProgramacionTurnos::model()->findAll($criteria); 
		}
       

                $this->render('index',array(
			'model'=>$model,
		));

	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ProgramacionTurnos('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ProgramacionTurnos']))
			$model->attributes=$_GET['ProgramacionTurnos'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=ProgramacionTurnos::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='programacion-turnos-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        public function actionGenerateExcel()
	{
            $session=new CHttpSession;
            $session->open();		
            
             if(isset($session['ProgramacionTurnos_records']))
               {
                $model=$session['ProgramacionTurnos_records'];
               }
               else
                 $model = ProgramacionTurnos::model()->findAll();

		
		Yii::app()->request->sendFile(date('YmdHis').'.xls',
			$this->renderPartial('excelReport', array(
				'model'=>$model
			), true)
		);
	}
        public function actionGeneratePdf() 
	{
           $session=new CHttpSession;
           $session->open();
		Yii::import('application.extensions.bootstrap.gii.*');
		require_once('bootstrap/tcpdf/tcpdf.php');
		require_once('bootstrap/tcpdf/config/lang/eng.php');

             if(isset($session['ProgramacionTurnos_records']))
               {
                $model=$session['ProgramacionTurnos_records'];
               }
               else
                 $model = ProgramacionTurnos::model()->findAll();



		$html = $this->renderPartial('expenseGridtoReport', array(
			'model'=>$model
		), true);
		
		//die($html);
		
		$pdf = new TCPDF();
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor(Yii::app()->name);
		$pdf->SetTitle('ProgramacionTurnos Report');
		$pdf->SetSubject('ProgramacionTurnos Report');
		//$pdf->SetKeywords('example, text, report');
		$pdf->SetHeaderData('', 0, "Report", '');
		$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, "Example Report by ".Yii::app()->name, "");
		$pdf->setHeaderFont(Array('helvetica', '', 8));
		$pdf->setFooterFont(Array('helvetica', '', 6));
		$pdf->SetMargins(15, 18, 15);
		$pdf->SetHeaderMargin(5);
		$pdf->SetFooterMargin(10);
		$pdf->SetAutoPageBreak(TRUE, 0);
		$pdf->SetFont('dejavusans', '', 7);
		$pdf->AddPage();
		$pdf->writeHTML($html, true, false, true, false, '');
		$pdf->LastPage();
		$pdf->Output("ProgramacionTurnos_002.pdf", "I");
	}
}
