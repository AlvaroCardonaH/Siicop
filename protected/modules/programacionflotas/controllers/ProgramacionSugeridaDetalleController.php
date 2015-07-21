<?php

class ProgramacionsugeridadetalleController extends Controller
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
		$model=new Programacionsugeridadetalle;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Programacionsugeridadetalle']))
		{
			$model->attributes=$_POST['Programacionsugeridadetalle'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IdProgramacionSugeridaDetalle));
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

		if(isset($_POST['Programacionsugeridadetalle']))
		{
			$model->attributes=$_POST['Programacionsugeridadetalle'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IdProgramacionSugeridaDetalle));
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

                $model=new Programacionsugeridadetalle('search');
                $model->unsetAttributes();  // clear any default values

                if(isset($_GET['Programacionsugeridadetalle']))
		{
                        $model->attributes=$_GET['Programacionsugeridadetalle'];
			
			
                   	
                       if (!empty($model->IdProgramacionSugeridaDetalle)) $criteria->addCondition("IdProgramacionSugeridaDetalle = '".$model->IdProgramacionSugeridaDetalle."'");
                     
                    	
                       if (!empty($model->IdProgramacionSugerida)) $criteria->addCondition("IdProgramacionSugerida = '".$model->IdProgramacionSugerida."'");
                     
                    	
                       if (!empty($model->NumeroMensajero)) $criteria->addCondition("NumeroMensajero = '".$model->NumeroMensajero."'");
                     
                    	
                       if (!empty($model->HoraCero)) $criteria->addCondition("HoraCero = '".$model->HoraCero."'");
                     
                    	
                       if (!empty($model->HoraUno)) $criteria->addCondition("HoraUno = '".$model->HoraUno."'");
                     
                    	
                       if (!empty($model->HoraDos)) $criteria->addCondition("HoraDos = '".$model->HoraDos."'");
                     
                    	
                       if (!empty($model->HoraTres)) $criteria->addCondition("HoraTres = '".$model->HoraTres."'");
                     
                    	
                       if (!empty($model->HoraCuatro)) $criteria->addCondition("HoraCuatro = '".$model->HoraCuatro."'");
                     
                    	
                       if (!empty($model->HoraCinco)) $criteria->addCondition("HoraCinco = '".$model->HoraCinco."'");
                     
                    	
                       if (!empty($model->HoraSeis)) $criteria->addCondition("HoraSeis = '".$model->HoraSeis."'");
                     
                    	
                       if (!empty($model->HoraSiete)) $criteria->addCondition("HoraSiete = '".$model->HoraSiete."'");
                     
                    	
                       if (!empty($model->HoraOcho)) $criteria->addCondition("HoraOcho = '".$model->HoraOcho."'");
                     
                    	
                       if (!empty($model->HoraNueve)) $criteria->addCondition("HoraNueve = '".$model->HoraNueve."'");
                     
                    	
                       if (!empty($model->HoraDiez)) $criteria->addCondition("HoraDiez = '".$model->HoraDiez."'");
                     
                    	
                       if (!empty($model->HoraOnce)) $criteria->addCondition("HoraOnce = '".$model->HoraOnce."'");
                     
                    	
                       if (!empty($model->HoraDoce)) $criteria->addCondition("HoraDoce = '".$model->HoraDoce."'");
                     
                    	
                       if (!empty($model->HoraTrece)) $criteria->addCondition("HoraTrece = '".$model->HoraTrece."'");
                     
                    	
                       if (!empty($model->HoraCatorce)) $criteria->addCondition("HoraCatorce = '".$model->HoraCatorce."'");
                     
                    	
                       if (!empty($model->HoraQuince)) $criteria->addCondition("HoraQuince = '".$model->HoraQuince."'");
                     
                    	
                       if (!empty($model->HoraDieciSeis)) $criteria->addCondition("HoraDieciSeis = '".$model->HoraDieciSeis."'");
                     
                    	
                       if (!empty($model->HoraDieciSiete)) $criteria->addCondition("HoraDieciSiete = '".$model->HoraDieciSiete."'");
                     
                    	
                       if (!empty($model->HoraDieciOcho)) $criteria->addCondition("HoraDieciOcho = '".$model->HoraDieciOcho."'");
                     
                    	
                       if (!empty($model->HoraDieciNueve)) $criteria->addCondition("HoraDieciNueve = '".$model->HoraDieciNueve."'");
                     
                    	
                       if (!empty($model->HoraVeinte)) $criteria->addCondition("HoraVeinte = '".$model->HoraVeinte."'");
                     
                    	
                       if (!empty($model->HoraVeintiUna)) $criteria->addCondition("HoraVeintiUna = '".$model->HoraVeintiUna."'");
                     
                    	
                       if (!empty($model->HoraVeintiDos)) $criteria->addCondition("HoraVeintiDos = '".$model->HoraVeintiDos."'");
                     
                    	
                       if (!empty($model->HoraVeintiTres)) $criteria->addCondition("HoraVeintiTres = '".$model->HoraVeintiTres."'");
                     
                    	
                       if (!empty($model->TotalHorasProgramadas)) $criteria->addCondition("TotalHorasProgramadas = '".$model->TotalHorasProgramadas."'");
                     
                    			
                    $session['Programacionsugeridadetalle_records']=Programacionsugeridadetalle::model()->findAll($criteria); 
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
		$model=new Programacionsugeridadetalle;
                $model->unsetAttributes(); //limpiamos para que no inserte dos veces				

                $array_detallelista = array();
                
		
		 if(isset($_POST['Programacionsugeridadetalle']))
		 {
                    
                                       
                     $array_detallelista=$_POST['Programacionsugeridadetalle'];
                     
                    
                   
                   
                    
                     foreach($array_detallelista as $key=>$array)
                     {
                         //echo "key ".$key;
                         $model=$this->loadModel($key);
                         
                        
                         $model->HoraCero=$array[0];
                         $model->HoraUno=$array[1];
                         $model->HoraDos=$array[2];
                         $model->HoraTres=$array[3];
                         $model->HoraCuatro=$array[4];
                         $model->HoraCinco=$array[5];
                         $model->HoraSeis=$array[6];
                         $model->HoraSiete=$array[7];
                         $model->HoraOcho=$array[8];
                         $model->HoraNueve=$array[9];
                         $model->HoraDiez=$array[10];
                         $model->HoraOnce=$array[11];
                         $model->HoraDoce=$array[12];
                         $model->HoraTrece=$array[13];
                         $model->HoraCatorce=$array[14];
                         $model->HoraQuince=$array[15];
                         $model->HoraDieciSeis=$array[16];
                         $model->HoraDieciSiete=$array[17];
                         $model->HoraDieciOcho=$array[18];
                         $model->HoraDieciNueve=$array[19];
                         $model->HoraVeinte=$array[20];
                         $model->HoraVeintiUna=$array[21];
                         $model->HoraVeintiDos=$array[22];
                         $model->HoraVeintiTres=$array[23];
                         
                         $model->save();
          
                         $sql = "SELECT HoraCero+HoraUno+HoraDos+HoraTres+HoraCuatro+HoraCinco+HoraSeis+HoraSiete+HoraOcho+HoraNueve+HoraDiez+HoraOnce+HoraDoce+HoraTrece+HoraCatorce+HoraQuince+HoraDieciSeis+HoraDieciSiete+HoraDieciOcho+HoraDieciNueve+HoraVeinte+HoraVeintiUna+HoraVeintiDos+HoraVeintiTres as Total
                         FROM t_programacionsugeridadetalle
                         WHERE IdProgramacionSugeridaDetalle = $key";
                         $TotalHoras = Yii::app()->db->createCommand($sql)->queryScalar();                         
                         $model->TotalHorasProgramadas = $TotalHoras;
                         $model->save();
                        
                       
                     }
                     $model->unsetAttributes(); //limpiamos para que no inserte dos veces 
                     
                 }
			
                
                $model->IdProgramacionSugerida=$id;
		$this->render('admin',array(
			'model'=>$model
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Programacionsugeridadetalle::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='Programacionsugeridadetalle-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        public function actionGenerateExcel()
	{
            $session=new CHttpSession;
            $session->open();		
            
             if(isset($session['Programacionsugeridadetalle_records']))
               {
                $model=$session['Programacionsugeridadetalle_records'];
               }
               else
                 $model = Programacionsugeridadetalle::model()->findAll();

		
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

             if(isset($session['Programacionsugeridadetalle_records']))
               {
                $model=$session['Programacionsugeridadetalle_records'];
               }
               else
                 $model = Programacionsugeridadetalle::model()->findAll();



		$html = $this->renderPartial('expenseGridtoReport', array(
			'model'=>$model
		), true);
		
		//die($html);
		
		$pdf = new TCPDF();
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor(Yii::app()->name);
		$pdf->SetTitle('Programacionsugeridadetalle Report');
		$pdf->SetSubject('Programacionsugeridadetalle Report');
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
		$pdf->Output("Programacionsugeridadetalle_002.pdf", "I");
	}
}
