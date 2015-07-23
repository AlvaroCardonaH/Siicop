<?php
$this->setPageTitle('Programacion de Turnos Mensajeros');
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links' => array(
        'Programacion Sugerida'=>array('ProgramacionSugerida/index'),
        'Programacion de Turnos Mensajeros'
        
    ),
));

$this->menu=array(
	array('label'=>'List ProgramacionTurnoMensajeros','url'=>array('index')),
	array('label'=>'Create ProgramacionTurnoMensajeros','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('programacion-turno-mensajeros-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Ver Programacion Turnos Mensajeros</h1>

<p><b>Flota: </b><?php echo Yii::app()->getRequest()->getParam('Flota'); ?></p>
<p><b>Fecha Inicial: </b><?php echo Yii::app()->getRequest()->getParam('FechaInicial'); ?></p>
<p><b>Fecha Final: </b><?php echo Yii::app()->getRequest()->getParam('FechaFinal'); ?></p>



<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'programacion-turno-mensajeros-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
                        'header'=>'Item #',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;'),
                        'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
                ),
		'IdProgramacionTurnoFecha',
		array(
                    'name'=>'NumeroTurno',
                    'htmlOptions'=>array('style'=>'width: 60px; text-align: justify;'),
                ),
                array(
                    'header'=>'Tipo Dia',
                    'name'=>'BuscarDia',
                    'value'=>'$data->idProgramacionTurnoFecha->idProgramacionTurno->idClasificacionDia->NombreClasificacionDia',
                    'htmlOptions'=>array('style'=>'width: 120px; text-align: justify;'),
                ),
                /*array('header'=>'Tipo Dia',
                       'name'=>'BuscarDia',
                       'htmlOptions'=>array('style'=>'width: 80px; text-align: justify;'),
                       'value'=>'$data->idClasificacionDia->NombreClasificacionDia',                      
                      ),*/
               
                array(
                    'header'=>'Fecha Inicio',
                    'name'=>'BuscarFechaInicial',
                    'value'=>'$data->idProgramacionTurnoFecha->FechaInicio',
                    'htmlOptions'=>array('style'=>'width: 120px; text-align: justify;'),
                ),
                array(
                    'header'=>'Fecha Final',
                    'name'=>'BuscarFechaFinal',
                    'value'=>'$data->idProgramacionTurnoFecha->FechaFinal',
                    'htmlOptions'=>array('style'=>'width: 120px; text-align: justify;'),
                ),
                
                array(
                    'name'=>'HoraInicio',
                    'htmlOptions'=>array('style'=>'width: 60px; text-align: center;'),
                ),
                array(
                    'name'=>'HoraFinal',
                    'htmlOptions'=>array('style'=>'width: 60px; text-align: center;'),
                ),
		array(
                    'name'=>'Documento',
                    'htmlOptions'=>array('style'=>'width: 60px; text-align: left;'),
                ),
		
		
		
		'NombreCompleto',
		/*'DiferenciaHoras',
		'HoraFinalAnterior',
		*/
		/*array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),*/
	),
)); ?>
