<?php
$this->setPageTitle('Detalle Programacion Sugerida');
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links' => array(
        'Programacion Sugerida'=>array('Programacionsugerida/index'),
        'Detalle Programacion Sugerida'
        
    ),
));



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tprogramacionsugeridadetalle-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<script>
    $( document ).ready(function() {
        
                
                          
                       $('.white').on('change', function(){                                            
                        
                        var valor = $(this).val();  
                        var $this = $(this);
                        if(valor  == "1")
                        {                     
                          
                            $this.addClass('yellow');
                            
                        }
                        else
                        {
                            
                            $this.removeClass('yellow');
                        }
                });
                
                $('.yellow').on('change', function(){                                            
                        
                        var valor = $(this).val();  
                        var $this = $(this);
                        if(valor  == "1")
                        {                     
                          
                            $this.addClass('yellow');
                            
                        }
                        else
                        {
                            
                            $this.removeClass('yellow');
                        }
                });
    });
 
    
</script>


<h4><b>Detalle Programacion Sugerida ID:<?php echo $model->IdProgramacionSugerida; ?></b></h4>
<p><b>Fecha Inicio: </b><?php echo Yii::app()->getRequest()->getParam('fechainicio'); ?></p>
<p><b>Fecha Final: </b><?php echo Yii::app()->getRequest()->getParam('fechafinal'); ?></p>
<?php
$tipoDia = Yii::app()->getRequest()->getParam('dia');
switch ($tipoDia) {
    case 1:
        echo "<p><b>Tipo Dia: Normal</b>";
        break;
    case 2:
        echo "<p><b>Tipo Dia: Festivo</b>";
        break;
    case 3:
        echo "<p><b>Tipo Dia: Cliente Fiel</b>";
        break;
}
?>

<?php
        $form=$this->beginWidget('CActiveForm', array(
        'id'=>'tprogramacionsugeridadetalle-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>true,
));

$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'tprogramacionsugeridadetalle-grid',
        'type'=>'striped bordered condensed',
        'template'=>'{summary}{pager}{items}{pager}',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		array(
		  'header'=>'# Mensajero', 
                  'type'=>'raw',
                  'value'=>'$data->NumeroMensajero',                  
		  'footer'=>'Total',
                  'footerHtmlOptions'=> array('class' => 'footer', 'style'=>'width: 30px; text-align: left;'),
               
		), 
            
            array(
		  'header'=>'Hora 0', 
                  'type'=>'raw',                   
                  'value'=>'CHtml::dropDownList("Programacionsugeridadetalle[$data->IdProgramacionSugeridaDetalle][]", '
                . '$data->HoraCero, array("0"=>"0","1"=>"1"),array("class"=>($data->HoraCero=="1") ? "yellow" : "white"))',
                  'footer'=>$model->getTotal($model->search()->getData(), 'HoraCero'),
                  'footerHtmlOptions'=> array('class' => 'footer'),
                  
                ),
            

             array(
		  'header'=>'Hora 1', 
                  'type'=>'raw',                   
                  'value'=>'CHtml::dropDownList("Programacionsugeridadetalle[$data->IdProgramacionSugeridaDetalle][]", '
                . '$data->HoraUno, array("0"=>"0","1"=>"1"),array("class"=>($data->HoraUno=="1") ? "yellow" : "white"))',
                  'footer'=>$model->getTotal($model->search()->getData(), 'HoraUno'),
                  'footerHtmlOptions'=> array('class' => 'footer'),
                 ),
            
            
            array(
		  'header'=>'Hora 2', 
                  'type'=>'raw',
                  'value'=>'CHtml::dropDownList("Programacionsugeridadetalle[$data->IdProgramacionSugeridaDetalle][]", '
                . '$data->HoraDos, array("0"=>"0","1"=>"1"),array("class"=>($data->HoraDos=="1") ? "yellow" : "white"))',
		  'footer'=>$model->getTotal($model->search()->getData(), 'HoraDos'),
                  'footerHtmlOptions'=> array('class' => 'footer'),
		),
            
            array(
		  'header'=>'Hora 3', 
                  'type'=>'raw',
                  'value'=>'CHtml::dropDownList("Programacionsugeridadetalle[$data->IdProgramacionSugeridaDetalle][]", '
                . '$data->HoraTres, array("0"=>"0","1"=>"1"),array("class"=>($data->HoraTres=="1") ? "yellow" : "white"))',
		  'footer'=>$model->getTotal($model->search()->getData(), 'HoraTres'),
                  'footerHtmlOptions'=> array('class' => 'footer'),
		),
            array(
		  'header'=>'Hora 4', 
                  'type'=>'raw',
                  'value'=>'CHtml::dropDownList("Programacionsugeridadetalle[$data->IdProgramacionSugeridaDetalle][]", '
                . '$data->HoraCuatro, array("0"=>"0","1"=>"1"),array("class"=>($data->HoraCuatro=="1") ? "yellow" : "white"))',
		  'footer'=>$model->getTotal($model->search()->getData(), 'HoraCuatro'),
                  'footerHtmlOptions'=> array('class' => 'footer'),
		),
            array(
		  'header'=>'Hora 5', 
                  'type'=>'raw',
                  'value'=>'CHtml::dropDownList("Programacionsugeridadetalle[$data->IdProgramacionSugeridaDetalle][]", '
                . '$data->HoraCinco, array("0"=>"0","1"=>"1"),array("class"=>($data->HoraCinco=="1") ? "yellow" : "white"))',
		  'footer'=>$model->getTotal($model->search()->getData(), 'HoraCinco'),
                  'footerHtmlOptions'=> array('class' => 'footer'),
		),
            array(
		  'header'=>'Hora 6', 
                  'type'=>'raw',
                  'value'=>'CHtml::dropDownList("Programacionsugeridadetalle[$data->IdProgramacionSugeridaDetalle][]", '
                . '$data->HoraSeis, array("0"=>"0","1"=>"1"),array("class"=>($data->HoraSeis=="1") ? "yellow" : "white"))',
		  'footer'=>$model->getTotal($model->search()->getData(), 'HoraSeis'),
                  'footerHtmlOptions'=> array('class' => 'footer'),
		),
            array(
		  'header'=>'Hora 7', 
                  'type'=>'raw',
                  'value'=>'CHtml::dropDownList("Programacionsugeridadetalle[$data->IdProgramacionSugeridaDetalle][]", '
                . '$data->HoraSiete, array("0"=>"0","1"=>"1"),array("class"=>($data->HoraSiete=="1") ? "yellow" : "white"))',
		  'footer'=>$model->getTotal($model->search()->getData(), 'HoraSiete'),
                  'footerHtmlOptions'=> array('class' => 'footer'),
		),
            array(
		  'header'=>'Hora 8', 
                  'type'=>'raw',
                  'value'=>'CHtml::dropDownList("Programacionsugeridadetalle[$data->IdProgramacionSugeridaDetalle][]", '
                . '$data->HoraOcho, array("0"=>"0","1"=>"1"),array("class"=>($data->HoraOcho=="1") ? "yellow" : "white"))',
		  'footer'=>$model->getTotal($model->search()->getData(), 'HoraOcho'),
                  'footerHtmlOptions'=> array('class' => 'footer'),
		),
            array(
		  'header'=>'Hora 9', 
                  'type'=>'raw',
                  'value'=>'CHtml::dropDownList("Programacionsugeridadetalle[$data->IdProgramacionSugeridaDetalle][]", '
                . '$data->HoraNueve, array("0"=>"0","1"=>"1"),array("class"=>($data->HoraNueve=="1") ? "yellow" : "white"))',
		  'footer'=>$model->getTotal($model->search()->getData(), 'HoraNueve'),
                  'footerHtmlOptions'=> array('class' => 'footer'),
		),
            array(
		  'header'=>'Hora 10', 
                  'type'=>'raw',
                  'value'=>'CHtml::dropDownList("Programacionsugeridadetalle[$data->IdProgramacionSugeridaDetalle][]", '
                . '$data->HoraDiez, array("0"=>"0","1"=>"1"),array("class"=>($data->HoraDiez=="1") ? "yellow" : "white"))',
		  'footer'=>$model->getTotal($model->search()->getData(), 'HoraDiez'),
                  'footerHtmlOptions'=> array('class' => 'footer'),
		),
            array(
		  'header'=>'Hora 11', 
                  'type'=>'raw',
                  'value'=>'CHtml::dropDownList("Programacionsugeridadetalle[$data->IdProgramacionSugeridaDetalle][]", '
                . '$data->HoraOnce, array("0"=>"0","1"=>"1"),array("class"=>($data->HoraOnce=="1") ? "yellow" : "white"))',
		  'footer'=>$model->getTotal($model->search()->getData(), 'HoraOnce'),
                  'footerHtmlOptions'=> array('class' => 'footer'),
		),
            array(
		  'header'=>'Hora 12', 
                  'type'=>'raw',
                  'value'=>'CHtml::dropDownList("Programacionsugeridadetalle[$data->IdProgramacionSugeridaDetalle][]", '
                . '$data->HoraDoce, array("0"=>"0","1"=>"1"),array("class"=>($data->HoraDoce=="1") ? "yellow" : "white"))',
		  'footer'=>$model->getTotal($model->search()->getData(), 'HoraDoce'),
                  'footerHtmlOptions'=> array('class' => 'footer'),
		),
            array(
		  'header'=>'Hora 13', 
                  'type'=>'raw',
                  'value'=>'CHtml::dropDownList("Programacionsugeridadetalle[$data->IdProgramacionSugeridaDetalle][]", '
                . '$data->HoraTrece, array("0"=>"0","1"=>"1"),array("class"=>($data->HoraTrece=="1") ? "yellow" : "white"))',
		  'footer'=>$model->getTotal($model->search()->getData(), 'HoraTrece'),
                  'footerHtmlOptions'=> array('class' => 'footer'),
		),
            array(
		  'header'=>'Hora 14', 
                  'type'=>'raw',
                  'value'=>'CHtml::dropDownList("Programacionsugeridadetalle[$data->IdProgramacionSugeridaDetalle][]", '
                . '$data->HoraCatorce, array("0"=>"0","1"=>"1"),array("class"=>($data->HoraCatorce=="1") ? "yellow" : "white"))',
		  'footer'=>$model->getTotal($model->search()->getData(), 'HoraCatorce'),
                  'footerHtmlOptions'=> array('class' => 'footer'),
		),
            array(
		  'header'=>'Hora 15', 
                  'type'=>'raw',
                  'value'=>'CHtml::dropDownList("Programacionsugeridadetalle[$data->IdProgramacionSugeridaDetalle][]", '
                . '$data->HoraQuince, array("0"=>"0","1"=>"1"),array("class"=>($data->HoraQuince=="1") ? "yellow" : "white"))',
		  'footer'=>$model->getTotal($model->search()->getData(), 'HoraQuince'),
                  'footerHtmlOptions'=> array('class' => 'footer'),
		),
            array(
		  'header'=>'Hora 16', 
                  'type'=>'raw',
                  'value'=>'CHtml::dropDownList("Programacionsugeridadetalle[$data->IdProgramacionSugeridaDetalle][]", '
                . '$data->HoraDieciSeis, array("0"=>"0","1"=>"1"),array("class"=>($data->HoraDieciSeis=="1") ? "yellow" : "white"))',
		  'footer'=>$model->getTotal($model->search()->getData(), 'HoraDieciSeis'),
                  'footerHtmlOptions'=> array('class' => 'footer'),
		),
            array(
		  'header'=>'Hora 17', 
                  'type'=>'raw',
                  'value'=>'CHtml::dropDownList("Programacionsugeridadetalle[$data->IdProgramacionSugeridaDetalle][]", '
                . '$data->HoraDieciSiete, array("0"=>"0","1"=>"1"),array("class"=>($data->HoraDieciSiete=="1") ? "yellow" : "white"))',
		  'footer'=>$model->getTotal($model->search()->getData(), 'HoraDieciSiete'),
                  'footerHtmlOptions'=> array('class' => 'footer'),
		),
            array(
		  'header'=>'Hora 18', 
                  'type'=>'raw',
                  'value'=>'CHtml::dropDownList("Programacionsugeridadetalle[$data->IdProgramacionSugeridaDetalle][]", '
                . '$data->HoraDieciOcho, array("0"=>"0","1"=>"1"),array("class"=>($data->HoraDieciOcho=="1") ? "yellow" : "white"))',
		  'footer'=>$model->getTotal($model->search()->getData(), 'HoraDieciOcho'),
                  'footerHtmlOptions'=> array('class' => 'footer'),
		),
            array(
		  'header'=>'Hora 19', 
                  'type'=>'raw',
                  'value'=>'CHtml::dropDownList("Programacionsugeridadetalle[$data->IdProgramacionSugeridaDetalle][]", '
                . '$data->HoraDieciNueve, array("0"=>"0","1"=>"1"),array("class"=>($data->HoraDieciNueve=="1") ? "yellow" : "white"))',
		  'footer'=>$model->getTotal($model->search()->getData(), 'HoraDieciNueve'),
                  'footerHtmlOptions'=> array('class' => 'footer'),
		),
            array(
		  'header'=>'Hora 20', 
                  'type'=>'raw',
                  'value'=>'CHtml::dropDownList("Programacionsugeridadetalle[$data->IdProgramacionSugeridaDetalle][]", '
                . '$data->HoraVeinte, array("0"=>"0","1"=>"1"),array("class"=>($data->HoraVeinte=="1") ? "yellow" : "white"))',
		  'footer'=>$model->getTotal($model->search()->getData(), 'HoraVeinte'),
                  'footerHtmlOptions'=> array('class' => 'footer'),
		),
            array(
		  'header'=>'Hora 21', 
                  'type'=>'raw',
                  'value'=>'CHtml::dropDownList("Programacionsugeridadetalle[$data->IdProgramacionSugeridaDetalle][]", '
                . '$data->HoraVeintiUna, array("0"=>"0","1"=>"1"),array("class"=>($data->HoraVeintiUna=="1") ? "yellow" : "white"))',
		  'footer'=>$model->getTotal($model->search()->getData(), 'HoraVeintiUna'),
                  'footerHtmlOptions'=> array('class' => 'footer'),
		),
            array(
		  'header'=>'Hora 22', 
                  'type'=>'raw',
                  'value'=>'CHtml::dropDownList("Programacionsugeridadetalle[$data->IdProgramacionSugeridaDetalle][]", '
                . '$data->HoraVeintiDos, array("0"=>"0","1"=>"1"),array("class"=>($data->HoraVeintiDos=="1") ? "yellow" : "white"))',
		  'footer'=>$model->getTotal($model->search()->getData(), 'HoraVeintiDos'),
                  'footerHtmlOptions'=> array('class' => 'footer'),
		),
            array(
		  'header'=>'Hora 23', 
                  'type'=>'raw',
                  'value'=>'CHtml::dropDownList("Programacionsugeridadetalle[$data->IdProgramacionSugeridaDetalle][]",$data->HoraVeintiTres, array("0"=>"0","1"=>"1"),array("class"=>($data->HoraVeintiTres=="1") ? "yellow" : "white"))',
		  'footer'=>$model->getTotal($model->search()->getData(), 'HoraVeintiTres'),
                  'footerHtmlOptions'=> array('class' => 'footer'),
		),
            
           
            array(
		  'header'=>'Total Horas', 
                  'type'=>'raw',
                  'value'=>'$data->TotalHorasProgramadas',
                  'htmlOptions'=>array('style'=>'width: 30px; text-align: center;', 'class' => 'footer'),
                  'footer'=>$model->getTotal($model->search()->getData(), 'TotalHorasProgramadas'),
                  'footerHtmlOptions'=> array('class' => 'footer'),
		),
            
            
	
             
	
	),
)); ?>
<table>
    <td><?= CHtml::submitButton('Modificar',['class' => 'btn btn-secondary']) ?></td>
    <td><?= CHtml::button('Generar Turno',array('submit' =>Yii::app()->createUrl("programacionflotas/ProgramacionTurnos/index", array("id" => $model->IdProgramacionSugerida)), 'confirm'=>'Esta seguro que desea seleccionar esta programacion sugerida?', 'class' => 'btn btn-primary'));?></td>
</table>
    <?php $this->endWidget(); ?>

<?php
        $diasModel = new VResumenClasificacionDias('search');
        $diasModel->unsetAttributes(); // clear any default values
        $diasModel->IdReportePedidosxPdv = Yii::app()->getRequest()->getParam('idreporte');  // IMPORTANTE!!!
        $diasModel->IdClasificacionDia = Yii::app()->getRequest()->getParam('dia');  // IMPORTANTE!!!
        
        if (isset($_GET['VResumenClasificacionDias'])) {
                $diasModel->attributes = $_GET['VResumenClasificacionDias'];
        }
        $Necesidad = "Necesidad";
		$this->widget('bootstrap.widgets.TbGridView',array(
        'type'=>'striped bordered condensed',
        'template'=>'{pager}{items}{pager}',
		'dataProvider' => $diasModel->search(),
        'summaryText' => '',    
		//'filter' => $diasModel,
		'columns' => array(
		
          /*  array(
			'header'=>'Necesidad',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 20px; text-align: center;', 'class'=>"white"),
			'value' => '',
                ),*/
            array(
			'header'=>'Hora 0',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;', 'class'=>"footer"),
			'value' => '$data->HoraCero',
                ),
            array(
			'header'=>'Hora 1',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;', 'class'=>"footer"),
			'value' => '$data->HoraUno',
                ),
            
            array(
			'header'=>'Hora 2',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;', 'class'=>"footer"),
			'value' => '$data->HoraDos',
                ),
            array(
			'header'=>'Hora 3',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;', 'class'=>"footer"),
			'value' => '$data->HoraTres',
                ),
            array(
			'header'=>'Hora 4',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;', 'class'=>"footer"),
			'value' => '$data->HoraCuatro',
                ),
            array(
			'header'=>'Hora 5',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;', 'class'=>"footer"),
			'value' => '$data->HoraCinco',
                ),
            array(
			'header'=>'Hora 6',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;', 'class'=>"footer"),
			'value' => '$data->HoraSeis',
                ),
            array(
			'header'=>'Hora 7',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;', 'class'=>"footer"),
			'value' => '$data->HoraSiete',
                ),
            array(
			'header'=>'Hora 8',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;', 'class'=>"footer"),
			'value' => '$data->HoraOcho',
                ),
            array(
			'header'=>'Hora 9',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;', 'class'=>"footer"),
			'value' => '$data->HoraNueve',
                ),
            array(
			'header'=>'Hora 10',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;', 'class'=>"footer"),
			'value' => '$data->HoraDiez',
                ),
            array(
			'header'=>'Hora 11',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;', 'class'=>"footer"),
			'value' => '$data->HoraOnce',
                ),
            array(
			'header'=>'Hora 12',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;', 'class'=>"footer"),
			'value' => '$data->HoraDoce',
                ),
            array(
			'header'=>'Hora 13',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;', 'class'=>"footer"),
			'value' => '$data->HoraTrece',
                ),
            array(
			'header'=>'Hora 14',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;', 'class'=>"footer"),
			'value' => '$data->HoraCatorce',
                ),
            array(
			'header'=>'Hora 15',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;', 'class'=>"footer"),
			'value' => '$data->HoraQuince',
                ),
            array(
			'header'=>'Hora 16',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;', 'class'=>"footer"),
			'value' => '$data->HoraDieciSeis',
                ),
            array(
			'header'=>'Hora 17',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;', 'class'=>"footer"),
			'value' => '$data->HoraDieciSiete',
                ),
            array(
			'header'=>'Hora 18',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;', 'class'=>"footer"),
			'value' => '$data->HoraDieciOcho',
                ),
            array(
			'header'=>'Hora 19',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;', 'class'=>"footer"),
			'value' => '$data->HoraDieciNueve',
                ),
            array(
			'header'=>'Hora 20',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;', 'class'=>"footer"),
			'value' => '$data->HoraVeinte',
                ),
            array(
			'header'=>'Hora 21',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;', 'class'=>"footer"),
			'value' => '$data->HoraVeintiUna',
                ),
            array(
			'header'=>'Hora 22',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;', 'class'=>"footer"),
			'value' => '$data->HoraVeintiDos',
                ),
            array(
			'header'=>'Hora 23',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;', 'class'=>"footer"),
			'value' => '$data->HoraVeintiTres',
                ),
            
            
            
            
            
            
            
            
            
            
            ),
        )); 

        
        $HoraCero=$model->getTotal($model->search()->getData(), 'HoraCero');
        $HoraUno=$model->getTotal($model->search()->getData(), 'HoraUno');
        $HoraDos=$model->getTotal($model->search()->getData(), 'HoraDos');
        $HoraTres=$model->getTotal($model->search()->getData(), 'HoraTres');
        $HoraCuatro=$model->getTotal($model->search()->getData(), 'HoraCuatro');
        $HoraCinco=$model->getTotal($model->search()->getData(), 'HoraCinco');
        $HoraSeis=$model->getTotal($model->search()->getData(), 'HoraSeis');
        $HoraSiete=$model->getTotal($model->search()->getData(), 'HoraSiete');
        $HoraOcho=$model->getTotal($model->search()->getData(), 'HoraOcho');
        $HoraNueve=$model->getTotal($model->search()->getData(), 'HoraNueve');
        $HoraDiez=$model->getTotal($model->search()->getData(), 'HoraDiez');
        $HoraOnce=$model->getTotal($model->search()->getData(), 'HoraOnce');
        $HoraDoce=$model->getTotal($model->search()->getData(), 'HoraDoce');
        $HoraTrece=$model->getTotal($model->search()->getData(), 'HoraTrece');
        $HoraCatorce=$model->getTotal($model->search()->getData(), 'HoraCatorce');
        $HoraQuince=$model->getTotal($model->search()->getData(), 'HoraQuince');
        $HoraDieciSeis=$model->getTotal($model->search()->getData(), 'HoraDieciSeis');
        $HoraDieciSiete=$model->getTotal($model->search()->getData(), 'HoraDieciSiete');
        $HoraDieciOcho=$model->getTotal($model->search()->getData(), 'HoraDieciOcho');
        $HoraDieciNueve=$model->getTotal($model->search()->getData(), 'HoraDieciNueve');
        $HoraVeinte=$model->getTotal($model->search()->getData(), 'HoraVeinte');
        $HoraVeintiUna=$model->getTotal($model->search()->getData(), 'HoraVeintiUna');
        $HoraVeintiDos=$model->getTotal($model->search()->getData(), 'HoraVeintiDos');
        $HoraVeintiTres=$model->getTotal($model->search()->getData(), 'HoraVeintiTres');
        
?>

<?php    
        $this->widget('bootstrap.widgets.TbGridView',array(
        'type'=>'striped bordered condensed',
        'template'=>'{pager}{items}{pager}',
	'dataProvider' => $diasModel->search(),
        'summaryText' => '',    
	//'filter' => $diasModel,
	'columns' => array(
             /*   array(
			'header'=>'Diferencia',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;', 'class'=>"white"),
			'value' => '',
                ),*/
                
		array(
			'header'=>'Hora 0',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;'),
			'value' => '$data->getDiferencia($data->HoraCero,'.$HoraCero.')',
                        'cssClassExpression' => '$data->getDiferencia($data->HoraCero,'.$HoraCero.') >= 0 ? "diferencia" : "necesidad"',
		),
                array(
			'header'=>'Hora 1',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;','class' => 'footer'),
			'value' => '$data->getDiferencia($data->HoraUno,'.$HoraUno.')',
                        'cssClassExpression' => '$data->getDiferencia($data->HoraUno,'.$HoraUno.') >= 0 ? "diferencia" : "necesidad"',
		),
                array(
			'header'=>'Hora 2',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;','class' => 'footer'),
			'value' => '$data->getDiferencia($data->HoraDos,'.$HoraDos.')',
                        'cssClassExpression' => '$data->getDiferencia($data->HoraDos,'.$HoraDos.') >= 0 ? "diferencia" : "necesidad"',
		),
		array(
			'header'=>'Hora 3',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;','class' => 'footer'),
			'value' => '$data->getDiferencia($data->HoraTres,'.$HoraTres.')',
                        'cssClassExpression' => '$data->getDiferencia($data->HoraTres,'.$HoraTres.') >= 0 ? "diferencia" : "necesidad"',
		),
		array(
			'header'=>'Hora 4',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;','class' => 'footer'),
			'value' => '$data->getDiferencia($data->HoraCuatro,'.$HoraCuatro.')',
                        'cssClassExpression' => '$data->getDiferencia($data->HoraCuatro,'.$HoraCuatro.') >= 0 ? "diferencia" : "necesidad"',
		),
                array(
			'header'=>'Hora 5',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;','class' => 'footer'),
			'value' => '$data->getDiferencia($data->HoraCinco,'.$HoraCinco.')',
                        'cssClassExpression' => '$data->getDiferencia($data->HoraCinco,'.$HoraCinco.') >= 0 ? "diferencia" : "necesidad"',
		),
		array(
			'header'=>'Hora 6',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;','class' => 'footer'),
			'value' => '$data->getDiferencia($data->HoraSeis,'.$HoraSeis.')',
                        'cssClassExpression' => '$data->getDiferencia($data->HoraSeis,'.$HoraSeis.') >= 0 ? "diferencia" : "necesidad"',
		),
                array(
			'header'=>'Hora 7',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;','class' => 'footer'),
			'value' => '$data->getDiferencia($data->HoraSiete,'.$HoraSiete.')',
                        'cssClassExpression' => '$data->getDiferencia($data->HoraSiete,'.$HoraSiete.') >= 0 ? "diferencia" : "necesidad"',
		),
                array(
			'header'=>'Hora 8',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;','class' => 'footer'),
			'value' => '$data->getDiferencia($data->HoraOcho,'.$HoraOcho.')',
                        'cssClassExpression' => '$data->getDiferencia($data->HoraOcho,'.$HoraOcho.') >= 0 ? "diferencia" : "necesidad"',
		),
                array(
			'header'=>'Hora 9',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;','class' => 'footer'),
			'value' => '$data->getDiferencia($data->HoraNueve,'.$HoraNueve.')',
                        'cssClassExpression' => '$data->getDiferencia($data->HoraNueve,'.$HoraNueve.') >= 0 ? "diferencia" : "necesidad"',
		),
                array(
			'header'=>'Hora 10',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;','class' => 'footer'),
			'value' => '$data->getDiferencia($data->HoraDiez,'.$HoraDiez.')',
                        'cssClassExpression' => '$data->getDiferencia($data->HoraDiez,'.$HoraDiez.') >= 0 ? "diferencia" : "necesidad"',
		),
                array(
			'header'=>'Hora 11',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;','class' => 'footer'),
			'value' => '$data->getDiferencia($data->HoraOnce,'.$HoraOnce.')',
                        'cssClassExpression' => '$data->getDiferencia($data->HoraOnce,'.$HoraOnce.') >= 0 ? "diferencia" : "necesidad"',
		),
                array(
			'header'=>'Hora 12',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;','class' => 'footer'),
			'value' => '$data->getDiferencia($data->HoraDoce,'.$HoraDoce.')',
                        'cssClassExpression' => '$data->getDiferencia($data->HoraDoce,'.$HoraDoce.') >= 0 ? "diferencia" : "necesidad"',
		),
                array(
			'header'=>'Hora 13',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;','class' => 'footer'),
			'value' => '$data->getDiferencia($data->HoraTrece,'.$HoraTrece.')',
                        'cssClassExpression' => '$data->getDiferencia($data->HoraTrece,'.$HoraTrece.') >= 0 ? "diferencia" : "necesidad"',
		),
                array(
			'header'=>'Hora 14',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;','class' => 'footer'),
			'value' => '$data->getDiferencia($data->HoraCatorce,'.$HoraCatorce.')',
                        'cssClassExpression' => '$data->getDiferencia($data->HoraCatorce,'.$HoraCatorce.') >= 0 ? "diferencia" : "necesidad"',
		),
                array(
			'header'=>'Hora 15',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;','class' => 'footer'),
			'value' => '$data->getDiferencia($data->HoraQuince,'.$HoraQuince.')',
                        'cssClassExpression' => '$data->getDiferencia($data->HoraQuince,'.$HoraQuince.') >= 0 ? "diferencia" : "necesidad"',
		),
                array(
			'header'=>'Hora 16',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;','class' => 'footer'),
			'value' => '$data->getDiferencia($data->HoraDieciSeis,'.$HoraDieciSeis.')',
                        'cssClassExpression' => '$data->getDiferencia($data->HoraDieciSeis,'.$HoraDieciSeis.') >= 0 ? "diferencia" : "necesidad"',
		),
                array(
			'header'=>'Hora 17',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;','class' => 'footer'),
			'value' => '$data->getDiferencia($data->HoraDieciSiete,'.$HoraDieciSiete.')',
                        'cssClassExpression' => '$data->getDiferencia($data->HoraDieciSiete,'.$HoraDieciSiete.') >= 0 ? "diferencia" : "necesidad"',
		),
                array(
			'header'=>'Hora 18',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;','class' => 'footer'),
			'value' => '$data->getDiferencia($data->HoraDieciOcho,'.$HoraDieciOcho.')',
                        'cssClassExpression' => '$data->getDiferencia($data->HoraDieciOcho,'.$HoraDieciOcho.') >= 0 ? "diferencia" : "necesidad"',
		),
                array(
			'header'=>'Hora 19',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;','class' => 'footer'),
			'value' => '$data->getDiferencia($data->HoraDieciNueve,'.$HoraDieciNueve.')',
                        'cssClassExpression' => '$data->getDiferencia($data->HoraDieciNueve,'.$HoraDieciNueve.') >= 0 ? "diferencia" : "necesidad"',
		),
                array(
			'header'=>'Hora 20',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;','class' => 'footer'),
			'value' => '$data->getDiferencia($data->HoraVeinte,'.$HoraVeinte.')',
                        'cssClassExpression' => '$data->getDiferencia($data->HoraVeinte,'.$HoraVeinte.') >= 0 ? "diferencia" : "necesidad"',
		),
                array(
			'header'=>'Hora 21',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;','class' => 'footer'),
			'value' => '$data->getDiferencia($data->HoraVeintiUna,'.$HoraVeintiUna.')',
                        'cssClassExpression' => '$data->getDiferencia($data->HoraVeintiUna,'.$HoraVeintiUna.') >= 0 ? "diferencia" : "necesidad"',
		),
                array(
			'header'=>'Hora 22',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;','class' => 'footer'),
			'value' => '$data->getDiferencia($data->HoraVeintiDos,'.$HoraVeintiDos.')',
                        'cssClassExpression' => '$data->getDiferencia($data->HoraVeintiDos,'.$HoraVeintiDos.') >= 0 ? "diferencia" : "necesidad"',
		),
                array(
			'header'=>'Hora 23',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;','class' => 'footer'),
			'value' => '$data->getDiferencia($data->HoraVeintiTres,'.$HoraVeintiTres.')',
                        'cssClassExpression' => '$data->getDiferencia($data->HoraVeintiTres,'.$HoraVeintiTres.') >= 0 ? "diferencia" : "necesidad"',
		),
		
		
		
		
		
		
		
		
		
		
		
	),
)); ?>
