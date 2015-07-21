<?php
$this->breadcrumbs=array(
	'Tresumen Clasificacion Diases'=>array('index'),
	$model->IdReportePedidosxPdv,
);
?>

<h1>View TResumenClasificacionDias #<?php echo $model->IdReportePedidosxPdv; ?></h1>
<hr />
<?php 
$this->beginWidget('zii.widgets.CPortlet', array(
	'htmlOptions'=>array(
		'class'=>''
	)
));
$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
		array('label'=>'Create', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array()),
                array('label'=>'List', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
                //array('label'=>'Update', 'icon'=>'icon-edit', 'url'=>Yii::app()->controller->createUrl('update',array('id'=>$model->id)), 'linkOptions'=>array()),
		//array('label'=>'Search', 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
		array('label'=>'Print', 'icon'=>'icon-print', 'url'=>'javascript:void(0);return false', 'linkOptions'=>array('onclick'=>'printDiv();return false;')),

)));
$this->endWidget();
?>
<div class='printableArea'>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'IdReportePedidosxPdv',
		'IdClasificacionDia',
		'NumeroPosicion',
		'IdHorario',
		'HoraInicio',
		'HoraFinal',
		'Lunes_Servicios',
		'Numero_Mensajeros_Lunes',
		'Martes_Servicios',
		'Numero_Mensajeros_Martes',
		'Miercoles_Servicios',
		'Numero_Mensajeros_Miercoles',
		'Jueves_Servicios',
		'Numero_Mensajeros_Jueves',
		'Viernes_Servicios',
		'Numero_Mensajeros_Viernes',
		'Sabado_Servicios',
		'Numero_Mensajeros_Sabado',
		'Domingo_Servicios',
		'Numero_Mensajeros_Domingo',
		'ClienteFiel_Servicios',
		'Numero_Mensajeros_ClienteFiel',
		'Promedio_Mensajeros_Hora_Normal',
		'Promedio_Mensajeros_Hora_Festivo',
	),
)); ?>
</div>
<style type="text/css" media="print">
body {visibility:hidden;}
.printableArea{visibility:visible;} 
</style>
<script type="text/javascript">
function printDiv()
{

window.print();

}
</script>
