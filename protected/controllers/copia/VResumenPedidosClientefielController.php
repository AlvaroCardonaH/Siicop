<?php

class VResumenPedidosClientefielController extends Controller
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
		$model=new VResumenPedidosClientefiel;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['VResumenPedidosClientefiel']))
		{
			$model->attributes=$_POST['VResumenPedidosClientefiel'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IdReportePedidosxPdv));
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

		if(isset($_POST['VResumenPedidosClientefiel']))
		{
			$model->attributes=$_POST['VResumenPedidosClientefiel'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IdReportePedidosxPdv));
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
            /*$session=new CHttpSession;
            $session->open();		
            $criteria = new CDbCriteria();            

                $model=new VResumenPedidosClientefiel('search');
                $model->unsetAttributes();  // clear any default values

                if(isset($_GET['VResumenPedidosClientefiel']))
		{
                        $model->attributes=$_GET['VResumenPedidosClientefiel'];
			
			
                   	
                       if (!empty($model->IdSede)) $criteria->addCondition("IdSede = '".$model->IdSede."'");
                     
                    	
                       if (!empty($model->NombreSede)) $criteria->addCondition("NombreSede = '".$model->NombreSede."'");
                     
                    	
                       if (!empty($model->IdReportePedidosxPdv)) $criteria->addCondition("IdReportePedidosxPdv = '".$model->IdReportePedidosxPdv."'");
                     
                    	
                       if (!empty($model->IdFlota)) $criteria->addCondition("IdFlota = '".$model->IdFlota."'");
                     
                    	
                       if (!empty($model->NombreFlota)) $criteria->addCondition("NombreFlota = '".$model->NombreFlota."'");
                     
                    	
                       if (!empty($model->IdClasificacionDia)) $criteria->addCondition("IdClasificacionDia = '".$model->IdClasificacionDia."'");
                     
                    	
                       if (!empty($model->NombreClasificacionDia)) $criteria->addCondition("NombreClasificacionDia = '".$model->NombreClasificacionDia."'");
                     
                    	
                       if (!empty($model->NumeroPosicion)) $criteria->addCondition("NumeroPosicion = '".$model->NumeroPosicion."'");
                     
                    	
                       if (!empty($model->IdHorario)) $criteria->addCondition("IdHorario = '".$model->IdHorario."'");
                     
                    	
                       if (!empty($model->HoraInicio)) $criteria->addCondition("HoraInicio = '".$model->HoraInicio."'");
                     
                    	
                       if (!empty($model->HoraFinal)) $criteria->addCondition("HoraFinal = '".$model->HoraFinal."'");
                     
                    	
                       if (!empty($model->NumeroServicios)) $criteria->addCondition("NumeroServicios = '".$model->NumeroServicios."'");
                     
                    			
                    $session['VResumenPedidosClientefiel_records']=VResumenPedidosClientefiel::model()->findAll($criteria); 
		}
       

                $this->render('index',array(
			'model'=>$model,
		));*/
                $model=new HReportepedidosxpdv('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['HReportepedidosxpdv']))
			$model->attributes=$_GET['HReportepedidosxpdv'];

		$this->render('index',array(
			'model'=>$model,
		));

	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin($id)
	{
		$model=new VResumenPedidosClientefiel('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['VResumenPedidosClientefiel']))
			$model->attributes=$_GET['VResumenPedidosClientefiel'];
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
		$model=VResumenPedidosClientefiel::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='vresumen-pedidos-clientefiel-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        public function actionGenerateExcel()
	{
            $session=new CHttpSession;
            $session->open();		
            
             if(isset($session['VResumenPedidosClientefiel_records']))
               {
                $model=$session['VResumenPedidosClientefiel_records'];
               }
               else
                 $model = VResumenPedidosClientefiel::model()->findAll();

		
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

             if(isset($session['VResumenPedidosClientefiel_records']))
               {
                $model=$session['VResumenPedidosClientefiel_records'];
               }
               else
                 $model = VResumenPedidosClientefiel::model()->findAll();



		$html = $this->renderPartial('expenseGridtoReport', array(
			'model'=>$model
		), true);
		
		//die($html);
		
		$pdf = new TCPDF();
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor(Yii::app()->name);
		$pdf->SetTitle('VResumenPedidosClientefiel Report');
		$pdf->SetSubject('VResumenPedidosClientefiel Report');
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
		$pdf->Output("VResumenPedidosClientefiel_002.pdf", "I");
	}
}
