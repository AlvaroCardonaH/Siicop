<?php

class ResumenClasificacionDiasController extends Controller
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
		$model=new ResumenClasificacionDias;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ResumenClasificacionDias']))
		{
			$model->attributes=$_POST['ResumenClasificacionDias'];
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

		if(isset($_POST['ResumenClasificacionDias']))
		{
			$model->attributes=$_POST['ResumenClasificacionDias'];
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

                $model=new ResumenClasificacionDias('search');
                $model->unsetAttributes();  // clear any default values

                if(isset($_GET['ResumenClasificacionDias']))
		{
                        $model->attributes=$_GET['ResumenClasificacionDias'];
			
			
                   	
                       if (!empty($model->IdReportePedidosxPdv)) $criteria->addCondition("IdReportePedidosxPdv = '".$model->IdReportePedidosxPdv."'");
                     
                    	
                       if (!empty($model->IdClasificacionDia)) $criteria->addCondition("IdClasificacionDia = '".$model->IdClasificacionDia."'");
                     
                    	
                       if (!empty($model->NumeroPosicion)) $criteria->addCondition("NumeroPosicion = '".$model->NumeroPosicion."'");
                     
                    	
                       if (!empty($model->IdHorario)) $criteria->addCondition("IdHorario = '".$model->IdHorario."'");
                     
                    	
                       if (!empty($model->HoraInicio)) $criteria->addCondition("HoraInicio = '".$model->HoraInicio."'");
                     
                    	
                       if (!empty($model->HoraFinal)) $criteria->addCondition("HoraFinal = '".$model->HoraFinal."'");
                     
                    	
                       if (!empty($model->Lunes_Servicios)) $criteria->addCondition("Lunes_Servicios = '".$model->Lunes_Servicios."'");
                     
                    	
                       if (!empty($model->Numero_Mensajeros_Lunes)) $criteria->addCondition("Numero_Mensajeros_Lunes = '".$model->Numero_Mensajeros_Lunes."'");
                     
                    	
                       if (!empty($model->Martes_Servicios)) $criteria->addCondition("Martes_Servicios = '".$model->Martes_Servicios."'");
                     
                    	
                       if (!empty($model->Numero_Mensajeros_Martes)) $criteria->addCondition("Numero_Mensajeros_Martes = '".$model->Numero_Mensajeros_Martes."'");
                     
                    	
                       if (!empty($model->Miercoles_Servicios)) $criteria->addCondition("Miercoles_Servicios = '".$model->Miercoles_Servicios."'");
                     
                    	
                       if (!empty($model->Numero_Mensajeros_Miercoles)) $criteria->addCondition("Numero_Mensajeros_Miercoles = '".$model->Numero_Mensajeros_Miercoles."'");
                     
                    	
                       if (!empty($model->Jueves_Servicios)) $criteria->addCondition("Jueves_Servicios = '".$model->Jueves_Servicios."'");
                     
                    	
                       if (!empty($model->Numero_Mensajeros_Jueves)) $criteria->addCondition("Numero_Mensajeros_Jueves = '".$model->Numero_Mensajeros_Jueves."'");
                     
                    	
                       if (!empty($model->Viernes_Servicios)) $criteria->addCondition("Viernes_Servicios = '".$model->Viernes_Servicios."'");
                     
                    	
                       if (!empty($model->Numero_Mensajeros_Viernes)) $criteria->addCondition("Numero_Mensajeros_Viernes = '".$model->Numero_Mensajeros_Viernes."'");
                     
                    	
                       if (!empty($model->Sabado_Servicios)) $criteria->addCondition("Sabado_Servicios = '".$model->Sabado_Servicios."'");
                     
                    	
                       if (!empty($model->Numero_Mensajeros_Sabado)) $criteria->addCondition("Numero_Mensajeros_Sabado = '".$model->Numero_Mensajeros_Sabado."'");
                     
                    	
                       if (!empty($model->Domingo_Servicios)) $criteria->addCondition("Domingo_Servicios = '".$model->Domingo_Servicios."'");
                     
                    	
                       if (!empty($model->Numero_Mensajeros_Domingo)) $criteria->addCondition("Numero_Mensajeros_Domingo = '".$model->Numero_Mensajeros_Domingo."'");
                     
                    	
                       if (!empty($model->ClienteFiel_Servicios)) $criteria->addCondition("ClienteFiel_Servicios = '".$model->ClienteFiel_Servicios."'");
                     
                    	
                       if (!empty($model->Numero_Mensajeros_ClienteFiel)) $criteria->addCondition("Numero_Mensajeros_ClienteFiel = '".$model->Numero_Mensajeros_ClienteFiel."'");
                     
                    	
                       if (!empty($model->Promedio_Mensajeros_Hora_Normal)) $criteria->addCondition("Promedio_Mensajeros_Hora_Normal = '".$model->Promedio_Mensajeros_Hora_Normal."'");
                     
                    	
                       if (!empty($model->Promedio_Mensajeros_Hora_Festivo)) $criteria->addCondition("Promedio_Mensajeros_Hora_Festivo = '".$model->Promedio_Mensajeros_Hora_Festivo."'");
                     
                    			
                    $session['ResumenClasificacionDias_records']=ResumenClasificacionDias::model()->findAll($criteria); 
		}
       

                $this->render('index',array(
			'model'=>$model,
		));*/
            $model=new Reportepedidosxpdv('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Reportepedidosxpdv']))
			$model->attributes=$_GET['Reportepedidosxpdv'];

		$this->render('index',array(
			'model'=>$model,
		));

	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin($id)
	{
                //die("Hola");
                $SQL1 = "SELECT * FROM t_resumen_clasificacion_dias
                        WHERE IdReportePedidosxPdv = $id;";
                $existe = Yii::app()->db->createCommand($SQL1)->execute();
                if($existe == null)
                {    
                $SQL2 = "CALL Generar_Resumen_DiaNormal($id, 1, 1.8);
                        CALL Generar_Resumen_DiaFestivo($id, 2, 1.8);
                        CALL Generar_Resumen_DiaClienteFiel($id, 3, 1.8);";
                Yii::app()->db->createCommand($SQL2)->execute();
                }
                
                $model=new ResumenClasificacionDias;
                $model->unsetAttributes(); //limpiamos para que no inserte dos veces	
                
                $array_detallelista = array();
                if(isset($_POST['ResumenClasificacionDias']))
                {
                     $array_detallelista=$_POST['FactorAtencion'];
                     foreach($array_detallelista as $key=>$array)
                     {
                        
                       /* $model=$this->loadModel($key);                        
                        
                         $model->FactorDeAtencion=$array[0];
                         $model->FactorDeAtencion=$array[1];
                         $model->FactorDeAtencion=$array[2];
                         
                        $model->save();*/
                     }
                     $model->unsetAttributes(); //limpiamos para que no inserte dos veces 
                         
                 }
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
		$model=ResumenClasificacionDias::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='resumen-clasificacion-dias-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        public function actionGenerateExcel()
	{
            $session=new CHttpSession;
            $session->open();		
            
             if(isset($session['ResumenClasificacionDias_records']))
               {
                $model=$session['ResumenClasificacionDias_records'];
               }
               else
                 $model = ResumenClasificacionDias::model()->findAll();

		
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

             if(isset($session['ResumenClasificacionDias_records']))
               {
                $model=$session['ResumenClasificacionDias_records'];
               }
               else
                 $model = ResumenClasificacionDias::model()->findAll();



		$html = $this->renderPartial('expenseGridtoReport', array(
			'model'=>$model
		), true);
		
		//die($html);
		
		$pdf = new TCPDF();
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor(Yii::app()->name);
		$pdf->SetTitle('ResumenClasificacionDias Report');
		$pdf->SetSubject('ResumenClasificacionDias Report');
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
		$pdf->Output("ResumenClasificacionDias_002.pdf", "I");
	}
}
