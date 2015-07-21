<?php

class MensajerosController extends Controller
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
		$model=new Mensajeros;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Mensajeros']))
		{
			$model->attributes=$_POST['Mensajeros'];
                        
                        $id=Yii::app()->user->id;
                        $model->IdUsuarioGraba = $id;                        
                        $model->IdUsuarioUltimaModifica = $id;
                        
                        $timestamp = date('Y-m-d G:i:s');
                        $model->FechaGraba = $timestamp;
                        $model->FechaUltimaModifica = $timestamp;
			if($model->save())
				$this->redirect(array('view','id'=>$model->IdMensajero));
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
		 $this->performAjaxValidation($model);

		if(isset($_POST['Mensajeros']))
		{
			$model->attributes=$_POST['Mensajeros'];
                        
                                                
                        $id=Yii::app()->user->id;                                             
                        $model->IdUsuarioUltimaModifica = $id;                        
                        $timestamp = date('Y-m-d G:i:s');                        
                        $model->FechaUltimaModifica = $timestamp;
			if($model->save())
				$this->redirect(array('view','id'=>$model->IdMensajero));
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
	public function actionIndex()
	{
            $session=new CHttpSession;
            $session->open();		
            $criteria = new CDbCriteria();            

                $model=new Mensajeros('search');
                $model->unsetAttributes();  // clear any default values

                if(isset($_GET['Mensajeros']))
		{
                        $model->attributes=$_GET['Mensajeros'];
			
			
                   	
                       if (!empty($model->IdMensajero)) $criteria->addCondition("IdMensajero = '".$model->IdMensajero."'");
                     
                    	
                       if (!empty($model->Documento)) $criteria->addCondition("Documento = '".$model->Documento."'");
                     
                    	
                       if (!empty($model->PrimerNombre)) $criteria->addCondition("PrimerNombre = '".$model->PrimerNombre."'");
                     
                    	
                       if (!empty($model->SegundoNombre)) $criteria->addCondition("SegundoNombre = '".$model->SegundoNombre."'");
                     
                    	
                       if (!empty($model->PrimerApellido)) $criteria->addCondition("PrimerApellido = '".$model->PrimerApellido."'");
                     
                    	
                       if (!empty($model->SegundoApellido)) $criteria->addCondition("SegundoApellido = '".$model->SegundoApellido."'");
                     
                    	
                       if (!empty($model->IdFlota)) $criteria->addCondition("IdFlota = '".$model->IdFlota."'");
                     
                    	
                       if (!empty($model->IdUsuarioGraba)) $criteria->addCondition("IdUsuarioGraba = '".$model->IdUsuarioGraba."'");
                     
                    	
                       if (!empty($model->FechaGraba)) $criteria->addCondition("FechaGraba = '".$model->FechaGraba."'");
                     
                    	
                       if (!empty($model->IdUsuarioUltimaModifica)) $criteria->addCondition("IdUsuarioUltimaModifica = '".$model->IdUsuarioUltimaModifica."'");
                     
                    	
                       if (!empty($model->FechaUltimaModifica)) $criteria->addCondition("FechaUltimaModifica = '".$model->FechaUltimaModifica."'");
                     
                    	
                       if (!empty($model->CodigoEstadoRegistro)) $criteria->addCondition("CodigoEstadoRegistro = '".$model->CodigoEstadoRegistro."'");
                     
                    			
                    $session['Mensajeros_records']=Mensajeros::model()->findAll($criteria); 
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
		$model=new Mensajeros('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Mensajeros']))
			$model->attributes=$_GET['Mensajeros'];

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
		$model=Mensajeros::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
        
        public static function obtenerEstado($elEstado){
            
            if ($elEstado == 0) 
                return 'INACTIVO';
            else
                return 'ACTIVO';
            
        }

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='Mensajeros-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        public function actionGenerateExcel()
	{
            $session=new CHttpSession;
            $session->open();		
            
             if(isset($session['Mensajeros_records']))
               {
                $model=$session['Mensajeros_records'];
               }
               else
                 $model = Mensajeros::model()->findAll();

		
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

             if(isset($session['Mensajeros_records']))
               {
                $model=$session['Mensajeros_records'];
               }
               else
                 $model = Mensajeros::model()->findAll();



		$html = $this->renderPartial('expenseGridtoReport', array(
			'model'=>$model
		), true);
		
		//die($html);
		
		$pdf = new TCPDF();
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor(Yii::app()->name);
		$pdf->SetTitle('Mensajeros Report');
		$pdf->SetSubject('Mensajeros Report');
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
		$pdf->Output("Mensajeros_002.pdf", "I");
	}
}
