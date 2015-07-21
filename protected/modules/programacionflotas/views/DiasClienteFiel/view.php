<?php
$this->setPageTitle('Ver Dias Cliente Fiel por Flota');
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links' => array(
        'Dias Cliente Fiel por Flota'=>array('index'),
        'Ver Dia Cliente Fiel por Flota'
        
    ),
));
?>

<h1>Ver Dia Cliente Fiel: <?php echo $model->IdDiaClienteFiel; ?></h1>
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
		array('label'=>'Crear', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array()),
                array('label'=>'Listar', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
                array('label'=>'Actualizar', 'icon'=>'icon-edit', 'url'=>Yii::app()->controller->createUrl('update',array('id'=>$model->IdDiaClienteFiel)), 'linkOptions'=>array()),
		//array('label'=>'Search', 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
		array('label'=>'Print', 'icon'=>'icon-print', 'url'=>'javascript:void(0);return false', 'linkOptions'=>array('onclick'=>'printDiv();return false;')),

)));
$this->endWidget();
?>
<div class='printableArea'>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'IdDiaClienteFiel',
		'idFlota.NombreFlota',
		'NumeroDiaMes',
		//'IdUsuarioGraba',
		'FechaGraba',
		//'IdUsuarioUltimaModifica',
		//'FechaUltimaModifica',
		//'CodigoEstadoRegistro',
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
