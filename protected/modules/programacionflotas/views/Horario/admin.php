<?php
$this->breadcrumbs=array(
	'Mhorarios'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MHorario','url'=>array('index')),
	array('label'=>'Create MHorario','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('mhorario-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Mhorarios</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'mhorario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'IdHorario',
		'HoraInicio',
		'HoraFinal',
		'IdUsuarioGraba',
		'FechaGraba',
		'IdUsuarioUltimaModifica',
		/*
		'FechaUltimaModifica',
		'CodigoEstadoRegistro',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
