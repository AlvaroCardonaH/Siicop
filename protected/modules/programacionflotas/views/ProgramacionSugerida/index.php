<?php
$this->setPageTitle('Programacion Sugerida');
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links' => array(
        'Programacion Sugerida'
        
    ),
));

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('tprogramacionsugerida-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>

<h1>Ver Programacion Sugerida</h1>
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
		array('label'=>'Crear Programacion Sugerida', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array()),
                array('label'=>'Listar', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'),'active'=>true, 'linkOptions'=>array()),
		array('label'=>'Buscar', 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
		//array('label'=>'Exportar a PDF', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('GeneratePdf'), 'linkOptions'=>array('target'=>'_blank'), 'visible'=>true),
		//array('label'=>'Exportar a Excel', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('GenerateExcel'), 'linkOptions'=>array('target'=>'_blank'), 'visible'=>true),
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
	'id'=>'tprogramacionsugerida-grid',
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
		array('header'=>'Tipo Dia',
                       'name'=>'BuscarDia',
                       'htmlOptions'=>array('style'=>'width: 80px; text-align: justify;'),
                       'value'=>'$data->idClasificacionDia->NombreClasificacionDia',                      
                      ),
                array(
                    'name'=>'IdReportePedidosxPdv',
                    'htmlOptions'=>array('style'=>'width: 80px; text-align: justify;'),
                ),      
		               
                array(
                    
                    'name'=>'IdFlota',
                    'htmlOptions'=>array('style'=>'width: 80px; text-align: justify;'),
                    'value'=>'$data->idReportexpdv->idFlota->NombreFlota',
                    'filter'=>CHtml::activeTextField($model,'BuscarFlota'),
                    
                ),       
                array(
                    'name'=>'FechaInicio',
                    'htmlOptions'=>array('style'=>'width: 90px; text-align: justify;'),
                ),  
                array(
                    'name'=>'FechaFinal',
                    'htmlOptions'=>array('style'=>'width: 90px; text-align: justify;'),
                ),  
		
				array(
                    'name'=>'DescripcionProgramacionSugerida',
                    'htmlOptions'=>array('style'=>'width: 250px; text-align: justify;'),
                ), 
                array(
                    'name'=>'NumeroMensajerosProgramacion',
                    'htmlOptions'=>array('style'=>'width: 80px; text-align: center;'),
                ), 
                array(
			'header'=>'Mensajeros Faltantes',
			'type' => 'raw',
                        'htmlOptions'=>array('style'=>'width: 20px; text-align: center;'),
			'value' => '$data->getNecesidad($data->IdProgramacionSugerida,$data->IdClasificacionDia,$data->IdReportePedidosxPdv)'
                ),
                
			array(
                    'class'=>'CLinkColumn',
                    'label'=>'Ver Detalle',
                    'htmlOptions'=>array('style'=>'width: 80px; text-align: center;'),
                    'urlExpression'=>'Yii::app()->createUrl("programacionflotas/Programacionsugeridadetalle/admin",array("id"=>$data->IdProgramacionSugerida,"fechainicio"=>$data->FechaInicio,"fechafinal"=>$data->FechaFinal,"idreporte"=>$data->IdReportePedidosxPdv,"dia"=>$data->IdClasificacionDia))',
                    'header'=>'Detalle'
                 ),
            /*array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'header'=>'Acciones',
			'template' => ' {update} {delete}',
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
            'htmlOptions'=>array('style'=>'width: 70px'),
           ),*/
            
            ),
		
)); ?>

