<?php

class HorarioxflotaController extends Controller
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
		$model=new Horarioxflota;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Horarioxflota']))
		{
			$model->attributes=$_POST['Horarioxflota'];
                        
                        $Flota = $model->IdFlota;
                        $HoraInicio = $_POST['Horarioxflota']['HoraInicio'];
                        $HoraFinal = $_POST['Horarioxflota']['HoraFinal'];
                        
                       
                    if($HoraInicio > $HoraFinal)
                    {
                            while($HoraInicio <= 23)
                            {
                                    $HoraInicioTotal=$HoraInicio++;
                                    $model->isNewRecord = true;
                                    $model->setPrimaryKey(NULL);
                                    $model->IdFlota = $model->IdFlota;
                                    $model->IdHorario = $HoraInicioTotal; 

                                    $sql = "SELECT IFNULL((MAX(NumeroPosicion)+1),1) AS NumeroPosicion 
                                    FROM m_horarioxflota
                                    WHERE IdFlota = $Flota";
                                    $NumeroPosicion = Yii::app()->db->createCommand($sql)->queryScalar();
                                    $model->NumeroPosicion = $NumeroPosicion;


                                    $id=Yii::app()->user->id;
                                    $model->IdUsuarioGraba = $id;                        
                                    $model->IdUsuarioUltimaModifica = $id;

                                    $timestamp = date('Y-m-d G:i:s');
                                    $model->FechaGraba = $timestamp;
                                    $model->FechaUltimaModifica = $timestamp;

                                    $model->save();
                                    
                                    
                            }
                            if($HoraInicioTotal ==  23)
                            {
                                    for($i = 0; $i <= $HoraFinal; $i++)
                                    {
                                        $model->isNewRecord = true;
                                        $model->setPrimaryKey(NULL);
                                        $model->IdFlota = $model->IdFlota;
                                        $model->IdHorario = $i; 

                                        $sql = "SELECT IFNULL((MAX(NumeroPosicion)+1),1) AS NumeroPosicion 
                                        FROM m_horarioxflota
                                        WHERE IdFlota = $Flota";
                                        $NumeroPosicion = Yii::app()->db->createCommand($sql)->queryScalar();
                                        $model->NumeroPosicion = $NumeroPosicion;


                                        $id=Yii::app()->user->id;
                                        $model->IdUsuarioGraba = $id;                        
                                        $model->IdUsuarioUltimaModifica = $id;

                                        $timestamp = date('Y-m-d G:i:s');
                                        $model->FechaGraba = $timestamp;
                                        $model->FechaUltimaModifica = $timestamp;

                                    $model->save();
                                            
                                    }
                            }
                    }

                        if($HoraInicio == $HoraFinal)
                        {
                                echo "La Hora de Inicio y la Hora Final no pueden ser las mismas";
                        }

                        if($HoraInicio < $HoraFinal)
                        {
                                while($HoraInicio <= $HoraFinal)
                                {
                                        
                                    $model->isNewRecord = true;
                                    $model->setPrimaryKey(NULL);
                                    $model->IdFlota = $model->IdFlota;
                                    $model->IdHorario = $HoraInicio++; 

                                    $sql = "SELECT IFNULL((MAX(NumeroPosicion)+1),1) AS NumeroPosicion 
                                    FROM m_horarioxflota
                                    WHERE IdFlota = $Flota";
                                    $NumeroPosicion = Yii::app()->db->createCommand($sql)->queryScalar();
                                    $model->NumeroPosicion = $NumeroPosicion;


                                    $id=Yii::app()->user->id;
                                    $model->IdUsuarioGraba = $id;                        
                                    $model->IdUsuarioUltimaModifica = $id;

                                    $timestamp = date('Y-m-d G:i:s');
                                    $model->FechaGraba = $timestamp;
                                    $model->FechaUltimaModifica = $timestamp;

                                    $model->save();
                                        
                                }
                        }
			if($model->save())
				$this->redirect(array('view','id'=>$model->IdHorarioxFlota));
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

		if(isset($_POST['Horarioxflota']))
		{
			$model->attributes=$_POST['Horarioxflota'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IdHorarioxFlota));
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

                $model=new Horarioxflota('search');
                $model->unsetAttributes();  // clear any default values

                if(isset($_GET['Horarioxflota']))
		{
                        $model->attributes=$_GET['Horarioxflota'];
			
			
                   	
                       if (!empty($model->IdHorarioxFlota)) $criteria->addCondition("IdHorarioxFlota = '".$model->IdHorarioxFlota."'");
                     
                    	
                       if (!empty($model->IdFlota)) $criteria->addCondition("IdFlota = '".$model->IdFlota."'");
                     
                    	
                       if (!empty($model->IdHorario)) $criteria->addCondition("IdHorario = '".$model->IdHorario."'");
                     
                    	
                       if (!empty($model->NumeroPosicion)) $criteria->addCondition("NumeroPosicion = '".$model->NumeroPosicion."'");
                     
                    	
                       if (!empty($model->EstaHabilitada)) $criteria->addCondition("EstaHabilitada = '".$model->EstaHabilitada."'");
                     
                    	
                       if (!empty($model->EsHoraPico)) $criteria->addCondition("EsHoraPico = '".$model->EsHoraPico."'");
                     
                    	
                       if (!empty($model->IdUsuarioGraba)) $criteria->addCondition("IdUsuarioGraba = '".$model->IdUsuarioGraba."'");
                     
                    	
                       if (!empty($model->FechaGraba)) $criteria->addCondition("FechaGraba = '".$model->FechaGraba."'");
                     
                    	
                       if (!empty($model->IdUsuarioUltimaModifica)) $criteria->addCondition("IdUsuarioUltimaModifica = '".$model->IdUsuarioUltimaModifica."'");
                     
                    	
                       if (!empty($model->FechaUltimaModifica)) $criteria->addCondition("FechaUltimaModifica = '".$model->FechaUltimaModifica."'");
                     
                    	
                       if (!empty($model->CodigoEstadoRegistro)) $criteria->addCondition("CodigoEstadoRegistro = '".$model->CodigoEstadoRegistro."'");
                     
                    			
                    $session['Horarioxflota_records']=Horarioxflota::model()->findAll($criteria); 
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
		$model=new Horarioxflota('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Horarioxflota']))
			$model->attributes=$_GET['Horarioxflota'];

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
		$model=Horarioxflota::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='Horarioxflota-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        public function actionGenerateExcel()
	{
            $session=new CHttpSession;
            $session->open();		
            
             if(isset($session['Horarioxflota_records']))
               {
                $model=$session['Horarioxflota_records'];
               }
               else
                 $model = Horarioxflota::model()->findAll();

		
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

             if(isset($session['Horarioxflota_records']))
               {
                $model=$session['Horarioxflota_records'];
               }
               else
                 $model = Horarioxflota::model()->findAll();



		$html = $this->renderPartial('expenseGridtoReport', array(
			'model'=>$model
		), true);
		
		//die($html);
		
		$pdf = new TCPDF();
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor(Yii::app()->name);
		$pdf->SetTitle('Horarioxflota Report');
		$pdf->SetSubject('Horarioxflota Report');
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
		$pdf->Output("Horarioxflota_002.pdf", "I");
	}
}
