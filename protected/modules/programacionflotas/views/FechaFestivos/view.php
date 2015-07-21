<?php
$this->setPageTitle('Ver Festivo');
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links' => array(
        'Festivos'=>array('index'),
        'Ver Festivo'
        
    ),
));
?>

<h1>Ver Festivo: <?php echo $model->FechaFestivo; ?></h1>
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
                array('label'=>'Actualizar', 'icon'=>'icon-edit', 'url'=>Yii::app()->controller->createUrl('update',array('id'=>$model->IdFechaFestivo)), 'linkOptions'=>array()),
		//array('label'=>'Search', 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
		array('label'=>'Imprimir', 'icon'=>'icon-print', 'url'=>'javascript:void(0);return false', 'linkOptions'=>array('onclick'=>'printDiv();return false;')),

)));
$this->endWidget();
?>
<div class='printableArea'>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'IdFechaFestivo',
		'FechaFestivo',
		//'IdUsuarioGraba',
		'FechaGraba',
		//'IdUsuarioUltimaModifica',
		//'FechaUltimaModifica',
		array(
                    'name'=>'Estado',
                    'value' => Yii::app()->controller->obtenerEstado($model->CodigoEstadoRegistro),
                ), 
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
