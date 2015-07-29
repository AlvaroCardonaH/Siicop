<?php
$this->setPageTitle('Programacion de Turnos');
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links' => array(
        'Programacion de Turnos'
        
    ),
));


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('programacion-turnos-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>

<h1>Programacion de Turnos</h1>
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
                array('label'=>'Listar', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'),'active'=>true, 'linkOptions'=>array()),
		array('label'=>'Buscar', 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
		array('label'=>'Exportar a PDF', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('GeneratePdf'), 'linkOptions'=>array('target'=>'_blank'), 'visible'=>true),
		array('label'=>'Exportar a Excel', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('GenerateExcel'), 'linkOptions'=>array('target'=>'_blank'), 'visible'=>true),
	),
));
$this->endWidget();
?>



<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'programacion-turnos-grid',
	'dataProvider'=>$model->search(),
        'filter'=>$model,
        'type'=>'striped bordered condensed',
        'template'=>'{summary}{pager}{items}{pager}',
	'columns'=>array(
                array(
                        'header'=>'Item #',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;'),
                        'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
                ),
                /*array(
                    'name'=>'IdProgramacionTurno',
                    'htmlOptions'=>array('style'=>'width: 30px; text-align: center;'),
                ),*/
		
		/*array(
                    'name'=>'IdProgramacionSugerida',
                    'htmlOptions'=>array('style'=>'width: 30px; text-align: center;'),
                    ),*/
		'idFlota.NombreFlota',
		//'idClasificacionDia.NombreClasificacionDia',
		'FechaInicial',
		'FechaFinal',
                array(
                    'class'=>'CLinkColumn',
                    'label'=>'Ver Programacion',
                    'htmlOptions'=>array('style'=>'width: 80px; text-align: center;'),
                    'urlExpression'=>'Yii::app()->createUrl("programacionflotas/ProgramacionTurnoMensajeros/admin",array("FechaInicial"=>$data->FechaInicial,"FechaFinal"=>$data->FechaFinal,"IdFlota"=>$data->IdFlota,"Flota"=>$data->idFlota->NombreFlota))',
                    'header'=>'Detalle'
                 ),
       /*array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => '{view} {update} {delete}',
			'buttons' => array(
			      'view' => array(
					'label'=> 'View',
					'options'=>array(
						'class'=>'btn btn-small view'
					)
				),	
                              'update' => array(
					'label'=> 'Update',
					'options'=>array(
						'class'=>'btn btn-small update'
					)
				),
				'delete' => array(
					'label'=> 'Delete',
					'options'=>array(
						'class'=>'btn btn-small delete'
					)
				)
			),
            'htmlOptions'=>array('style'=>'width: 115px'),
           )*/
	),
)); ?>

