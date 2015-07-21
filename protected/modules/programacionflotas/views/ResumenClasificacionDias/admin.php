<?php
$this->setPageTitle('Resumen Clasificacion dias');
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links' => array(
        'Reporte pedidos por punto de venta'=>array('index'),
        'Resumen Clasificacion Dias'
        
    ),
));



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tresumen-clasificacion-dias-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Resumen General Clasificacion Dias</h1>
<p><b>Reporte por punto de venta #: </b><?php echo $id = Yii::app()->getRequest()->getParam('id'); ?></p>
<p><b>Fecha Inicio: </b><?php echo Yii::app()->getRequest()->getParam('fechainicio'); ?></p>
<p><b>Fecha Final: </b><?php echo Yii::app()->getRequest()->getParam('fechafinal'); ?></p>
<p><b>Flota: </b><?php echo Yii::app()->getRequest()->getParam('flota'); ?></p>
<?php
$result = Yii::app()->db->createCommand("SELECT S.NombreSede
FROM m_sedes S, m_flotas F, h_reportepedidosxpdv R 
WHERE S.IdSede = F.IdSede
AND F.IdFlota = R.IdFlota
AND R.IdReportePedidosxPdv = $id");
$res    = $result->query();
foreach($res as $item)
{
?>
<p><b>Sede: </b><?php echo $item['NombreSede'];  ?></p>
<?php
}
?>
<?php
/*$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
    'id'=>'mydialog',
    'options'=>array(
        'title'=>'Actualizar Factor de Atencion',
		'width'=>400,
		'height'=>400,
        'autoOpen'=>false,
    ),
));
    echo $this->renderPartial('update',array(
			'model'=>$model,
		));
$this->endWidget('zii.widgets.jui.CJuiDialog');?>
*/
?>
<?php $form=$this->beginWidget('CActiveForm', array(
    'enableAjaxValidation'=>true,
)); ?>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'tresumen-clasificacion-dias-grid',
        'template'=>'{summary}{pager}{items}{pager}',
        'type'=>'striped bordered condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
                	array ('header'=>'Hora',
                       'name'=>'BuscarHora',
                       'htmlOptions'=>array('style'=>'width: 40px; text-align: center;','class'=>'verdeclaro'),
                       'value'=>'$data->HoraInicio." ".$data->HoraFinal',                      
                      ),
			
			
                        array(
                            'name'=>'FactorDeAtencion',
                            'type'=>'raw',
                            'value'=>'CHtml::textField("ResumenClasificacionDias[$data->IdResumenClasificacionDia][]",$data->FactorDeAtencion,array("style"=>"width:30px; text-align: center;"))',
                            'htmlOptions'=>array("width"=>"30px"),
                        ),
                     

			array ('header'=>'Tipo Dia',
                       'name'=>'BuscarDia',
                       'htmlOptions'=>array('style'=>' text-align: justify;','class'=>'verdeclaro'),
                       'value'=>'$data->idClasificacionDia->NombreClasificacionDia',                      
                        ),
                        array (
                       'name'=>'Lunes_Servicios',
                       'htmlOptions'=>array('style'=>'text-align: center;'),
                       //'value'=>'$data->idClasificacionDia->NombreClasificacionDia',                      
                        ),
                array (
                       'name'=>'Numero_Mensajeros_Lunes',
                       'htmlOptions'=>array('style'=>'text-align: center;','class'=>'verdeclaro'),
                       //'value'=>'$data->idClasificacionDia->NombreClasificacionDia',                      
                      ),
		array (
                       'name'=>'Martes_Servicios',
                       'htmlOptions'=>array('style'=>'text-align: center;'),
                       //'value'=>'$data->idClasificacionDia->NombreClasificacionDia',                      
                      ),
                array (
                       'name'=>'Numero_Mensajeros_Martes',
                       'htmlOptions'=>array('style'=>'text-align: center;','class'=>'verdeclaro'),
                       //'value'=>'$data->idClasificacionDia->NombreClasificacionDia',                      
                      ),
                array (
                       'name'=>'Miercoles_Servicios',
                       'htmlOptions'=>array('style'=>'text-align: center;'),
                       //'value'=>'$data->idClasificacionDia->NombreClasificacionDia',                      
                      ),      
                array (
                       'name'=>'Numero_Mensajeros_Miercoles',
                       'htmlOptions'=>array('style'=>'text-align: center;','class'=>'verdeclaro'),
                       //'value'=>'$data->idClasificacionDia->NombreClasificacionDia',                      
                      ),
                array (
                       'name'=>'Jueves_Servicios',
                       'htmlOptions'=>array('style'=>'text-align: center;'),
                       //'value'=>'$data->idClasificacionDia->NombreClasificacionDia',                      
                      ),
                array (
                       'name'=>'Numero_Mensajeros_Jueves',
                       'htmlOptions'=>array('style'=>'text-align: center;','class'=>'verdeclaro'),
                       //'value'=>'$data->idClasificacionDia->NombreClasificacionDia',                      
                      ),
                array (
                       'name'=>'Viernes_Servicios',
                       'htmlOptions'=>array('style'=>'text-align: center;'),
                       //'value'=>'$data->idClasificacionDia->NombreClasificacionDia',                      
                      ), 
                array (
                       'name'=>'Numero_Mensajeros_Viernes',
                       'htmlOptions'=>array('style'=>'text-align: center;','class'=>'verdeclaro'),
                       //'value'=>'$data->idClasificacionDia->NombreClasificacionDia',                      
                      ),
                array (
                       'name'=>'Sabado_Servicios',
                       'htmlOptions'=>array('style'=>'text-align: center;'),
                       //'value'=>'$data->idClasificacionDia->NombreClasificacionDia',                      
                      ), 
                array (
                       'name'=>'Numero_Mensajeros_Sabado',
                       'htmlOptions'=>array('style'=>'text-align: center;','class'=>'verdeclaro'),
                       //'value'=>'$data->idClasificacionDia->NombreClasificacionDia',                      
                      ),
                array (
                       'name'=>'Domingo_Servicios',
                       'htmlOptions'=>array('style'=>'text-align: center;'),
                       //'value'=>'$data->idClasificacionDia->NombreClasificacionDia',                      
                      ),
                array (
                       'name'=>'Numero_Mensajeros_Domingo',
                       'htmlOptions'=>array('style'=>'text-align: center;','class'=>'verdeclaro'),
                       //'value'=>'$data->idClasificacionDia->NombreClasificacionDia',                      
                      ),
                array (
                       'name'=>'ClienteFiel_Servicios',
                       'htmlOptions'=>array('style'=>'text-align: center;'),
                       //'value'=>'$data->idClasificacionDia->NombreClasificacionDia',                      
                      ), 
                array (
                       'name'=>'Numero_Mensajeros_ClienteFiel',
                       'htmlOptions'=>array('style'=>'text-align: center;','class'=>'verdeclaro'),
                       //'value'=>'$data->idClasificacionDia->NombreClasificacionDia',                      
                      ),
                array (
                       'name'=>'Promedio_Mensajeros_Hora_Normal',
                       'htmlOptions'=>array('style'=>'text-align: center;'),
                       //'value'=>'$data->idClasificacionDia->NombreClasificacionDia',                      
                      ), 
                array (
                       'name'=>'Promedio_Mensajeros_Hora_Festivo',
                       'htmlOptions'=>array('style'=>'text-align: center;','class'=>'verdeclaro'),
                       //'value'=>'$data->idClasificacionDia->NombreClasificacionDia',                      
                      ),
                array (
                       'name'=>'Promedio_Mensajeros_Hora_ClienteFiel',
                       'htmlOptions'=>array('style'=>'text-align: center;'),
                       //'value'=>'$data->idClasificacionDia->NombreClasificacionDia',                      
                      ),      
		
		
		
	),
)); 
?>
<?= CHtml::submitButton('Modificar',['class' => 'btn btn-primary']) ?>
<?php $this->endWidget(); ?>
