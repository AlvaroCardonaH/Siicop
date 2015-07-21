<?php

class HReportepedidosxpdvdetalleController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';

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
		$model=new HReportepedidosxpdvdetalle;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['HReportepedidosxpdvdetalle']))
		{
			$model->attributes=$_POST['HReportepedidosxpdvdetalle'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IdReportePedidosxPdvDetalle));
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

		if(isset($_POST['HReportepedidosxpdvdetalle']))
		{
			$model->attributes=$_POST['HReportepedidosxpdvdetalle'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IdReportePedidosxPdvDetalle));
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

                $model=new HReportepedidosxpdvdetalle('search');
                $model->unsetAttributes();  // clear any default values

                if(isset($_GET['HReportepedidosxpdvdetalle']))
		{
                        $model->attributes=$_GET['HReportepedidosxpdvdetalle'];
			
			
                   	
                       if (!empty($model->IdReportePedidosxPdvDetalle)) $criteria->addCondition("IdReportePedidosxPdvDetalle = '".$model->IdReportePedidosxPdvDetalle."'");
                     
                    	
                       if (!empty($model->IdReportePedidosxPdv)) $criteria->addCondition("IdReportePedidosxPdv = '".$model->IdReportePedidosxPdv."'");
                     
                    	
                       if (!empty($model->NumeroDeRegistro)) $criteria->addCondition("NumeroDeRegistro = '".$model->NumeroDeRegistro."'");
                     
                    	
                       if (!empty($model->CodigoPdv)) $criteria->addCondition("CodigoPdv = '".$model->CodigoPdv."'");
                     
                    	
                       if (!empty($model->NombrePdv)) $criteria->addCondition("NombrePdv = '".$model->NombrePdv."'");
                     
                    	
                       if (!empty($model->Caja)) $criteria->addCondition("Caja = '".$model->Caja."'");
                     
                    	
                       if (!empty($model->Factura)) $criteria->addCondition("Factura = '".$model->Factura."'");
                     
                    	
                       if (!empty($model->Valor)) $criteria->addCondition("Valor = '".$model->Valor."'");
                     
                    	
                       if (!empty($model->NombreMensajero)) $criteria->addCondition("NombreMensajero = '".$model->NombreMensajero."'");
                     
                    	
                       if (!empty($model->CelularMensajero)) $criteria->addCondition("CelularMensajero = '".$model->CelularMensajero."'");
                     
                    	
                       if (!empty($model->NombreCliente)) $criteria->addCondition("NombreCliente = '".$model->NombreCliente."'");
                     
                    	
                       if (!empty($model->DireccionCliente)) $criteria->addCondition("DireccionCliente = '".$model->DireccionCliente."'");
                     
                    	
                       if (!empty($model->TelefonoCliente)) $criteria->addCondition("TelefonoCliente = '".$model->TelefonoCliente."'");
                     
                    	
                       if (!empty($model->EstadoPedido)) $criteria->addCondition("EstadoPedido = '".$model->EstadoPedido."'");
                     
                    	
                       if (!empty($model->CausalEntrega)) $criteria->addCondition("CausalEntrega = '".$model->CausalEntrega."'");
                     
                    	
                       if (!empty($model->FechaPos)) $criteria->addCondition("FechaPos = '".$model->FechaPos."'");
                     
                    	
                       if (!empty($model->FechaAceptacion)) $criteria->addCondition("FechaAceptacion = '".$model->FechaAceptacion."'");
                     
                    	
                       if (!empty($model->TiempoEspera)) $criteria->addCondition("TiempoEspera = '".$model->TiempoEspera."'");
                     
                    	
                       if (!empty($model->FechaEntrega)) $criteria->addCondition("FechaEntrega = '".$model->FechaEntrega."'");
                     
                    	
                       if (!empty($model->TiempoTotalMinutos)) $criteria->addCondition("TiempoTotalMinutos = '".$model->TiempoTotalMinutos."'");
                     
                    	
                       if (!empty($model->IdRuta)) $criteria->addCondition("IdRuta = '".$model->IdRuta."'");
                     
                    	
                       if (!empty($model->CodigoEstadoRegistro)) $criteria->addCondition("CodigoEstadoRegistro = '".$model->CodigoEstadoRegistro."'");
                     
                    	
                       if (!empty($model->EsDiaFestivo)) $criteria->addCondition("EsDiaFestivo = '".$model->EsDiaFestivo."'");
                     
                    			
                    $session['HReportepedidosxpdvdetalle_records']=HReportepedidosxpdvdetalle::model()->findAll($criteria); 
		}
       

                $this->render('index',array(
			'model'=>$model,
		));

	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin($id)
	{
		$model=new HReportepedidosxpdvdetalle('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['HReportepedidosxpdvdetalle']))
			$model->attributes=$_GET['HReportepedidosxpdvdetalle'];
                $model->IdReportePedidosxPdv=$id;

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
		$model=HReportepedidosxpdvdetalle::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='hreportepedidosxpdvdetalle-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        public function actionGenerateExcel()
	{
            $session=new CHttpSession;
            $session->open();		
            
             if(isset($session['HReportepedidosxpdvdetalle_records']))
               {
                $model=$session['HReportepedidosxpdvdetalle_records'];
               }
               else
                 $model = HReportepedidosxpdvdetalle::model()->findAll();

		
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

             if(isset($session['HReportepedidosxpdvdetalle_records']))
               {
                $model=$session['HReportepedidosxpdvdetalle_records'];
               }
               else
                 $model = HReportepedidosxpdvdetalle::model()->findAll();



		$html = $this->renderPartial('expenseGridtoReport', array(
			'model'=>$model
		), true);
		
		//die($html);
		
		$pdf = new TCPDF();
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor(Yii::app()->name);
		$pdf->SetTitle('HReportepedidosxpdvdetalle Report');
		$pdf->SetSubject('HReportepedidosxpdvdetalle Report');
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
		$pdf->Output("HReportepedidosxpdvdetalle_002.pdf", "I");
	}
}
