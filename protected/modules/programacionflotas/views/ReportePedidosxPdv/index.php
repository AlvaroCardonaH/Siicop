<?php
$this->setPageTitle('Reporte Pedidos por Punto de Venta');
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links' => array(
        'Reporte Pedidos por Punto de Venta'
        
    ),
));

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('hreportepedidosxpdv-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>

<h1>Ver Reporte Pedidos por Punto de Venta</h1>
<h4>Presione clic en Ver Detalle para ver el reporte: </h4>
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
		array('label'=>'Subir Archivo', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array()),
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
	'id'=>'hreportepedidosxpdv-grid',
	'dataProvider'=>$model->search(),
        'type'=>'striped bordered condensed',
        'template'=>'{summary}{pager}{items}{pager}',
	'columns'=>array(
                array(
                        'header'=>'Item #',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;'),
                        'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
                ),
		'IdReportePedidosxPdv',
		'FechaInicio',
		'FechaFinal',
		'idFlota.NombreFlota',
		//'CodigoEstadoReporte',
		//'IdUsuarioGraba',
		/*
		'FechaGraba',
		'CodigoEstadoRegistro',
		*/
        array(
                    'class'=>'CLinkColumn',
                    'label'=>'Ver Detalle',
                    'urlExpression'=>'Yii::app()->createUrl("programacionflotas/Reportepedidosxpdvdetalle/admin",array("id"=>$data->IdReportePedidosxPdv,"fechainicio"=>$data->FechaInicio,"fechafinal"=>$data->FechaFinal,"flota"=>$data->idFlota->NombreFlota))',
                    'header'=>'Detalle'
                 ),
	),
)); ?>

