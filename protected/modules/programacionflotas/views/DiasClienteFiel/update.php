<?php
$this->setPageTitle('Actualizar Dias Cliente Fiel por Flota');
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links' => array(
        'Dias Cliente Fiel por Flota'=>array('index'),
        'Actualizar Dia Cliente Fiel por Flota'
        
    ),
));

?>

<h1>Actualizar Dia Cliente Fiel por Flota<?php echo $model->IdDiaClienteFiel; ?></h1>
<hr/>

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
                array('label'=>'Actualizar', 'icon'=>'icon-edit', 'url'=>Yii::app()->controller->createUrl('update',array('id'=>$model->IdDiaClienteFiel)),'active'=>true, 'linkOptions'=>array()),
	),
));
$this->endWidget();
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>