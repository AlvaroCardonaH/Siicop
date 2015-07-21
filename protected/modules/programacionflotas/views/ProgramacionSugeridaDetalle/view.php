<?php
$this->breadcrumbs=array(
	'Tprogramacionsugeridadetalles'=>array('index'),
	$model->IdProgramacionSugeridaDetalle,
);
?>

<h1>View TProgramacionsugeridadetalle #<?php echo $model->IdProgramacionSugeridaDetalle; ?></h1>
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
                array('label'=>'Update', 'icon'=>'icon-edit', 'url'=>Yii::app()->controller->createUrl('update',array('id'=>$model->id)), 'linkOptions'=>array()),
		//array('label'=>'Search', 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
		array('label'=>'Print', 'icon'=>'icon-print', 'url'=>'javascript:void(0);return false', 'linkOptions'=>array('onclick'=>'printDiv();return false;')),

)));
$this->endWidget();
?>
<div class='printableArea'>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'IdProgramacionSugeridaDetalle',
		'IdProgramacionSugerida',
		'NumeroMensajero',
		'HoraCero',
		'HoraUno',
		'HoraDos',
		'HoraTres',
		'HoraCuatro',
		'HoraCinco',
		'HoraSeis',
		'HoraSiete',
		'HoraOcho',
		'HoraNueve',
		'HoraDiez',
		'HoraOnce',
		'HoraDoce',
		'HoraTrece',
		'HoraCatorce',
		'HoraQuince',
		'HoraDieciSeis',
		'HoraDieciSiete',
		'HoraDieciOcho',
		'HoraDieciNueve',
		'HoraVeinte',
		'HoraVeintiUna',
		'HoraVeintiDos',
		'HoraVeintiTres',
		'TotalHorasProgramadas',
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
