<?php
$this->setPageTitle('Reporte Pedidos por Punto de Venta');
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links' => array(
        'Reporte Pedidos por Punto de Venta'=>array('HReportepedidosxpdv/index'),
        'Detalle Reporte Pedidos por Punto de Venta'
        
    ),
));


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('hreportepedidosxpdvdetalle-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Detalle reporte pedidos por punto de venta</h1>

<p><b>Fecha Inicio: </b><?php echo Yii::app()->getRequest()->getParam('fechainicio'); ?></p>
<p><b>Fecha Final: </b><?php echo Yii::app()->getRequest()->getParam('fechafinal'); ?></p>
<p><b>Flota: </b><?php echo Yii::app()->getRequest()->getParam('flota'); ?></p>

<?php 
$this->beginWidget('zii.widgets.CPortlet', array(
	'htmlOptions'=>array(
		'class'=>''
	)
));
$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
		//array('label'=>'Create', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array()),
                array('label'=>'Listar', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'),'active'=>true, 'linkOptions'=>array()),
		array('label'=>'Buscar', 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
		array('label'=>'Exportar a PDF', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('GeneratePdf'), 'linkOptions'=>array('target'=>'_blank'), 'visible'=>true),
		array('label'=>'Exportar a Excel', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('GenerateExcel'), 'linkOptions'=>array('target'=>'_blank'), 'visible'=>true),
	),
));
$this->endWidget();
?>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'hreportepedidosxpdvdetalle-grid',
	'dataProvider'=>$model->search(),
        'type'=>'striped bordered condensed',
        'template'=>'{summary}{pager}{items}{pager}',
	'filter'=>$model,
	'columns'=>array(
		//'IdReportePedidosxPdvDetalle',
		//'IdReportePedidosxPdv',
		'NumeroDeRegistro',
		//'CodigoPdv',
		'NombrePdv',
		'Caja',
		
		'Factura',
		'Valor',
		'NombreMensajero',
		'CelularMensajero',
		'NombreCliente',
		'DireccionCliente',
		'TelefonoCliente',
		'EstadoPedido',
		//'CausalEntrega',
		'FechaPos',
		'FechaAceptacion',
		'TiempoEspera',
		'FechaEntrega',
		'TiempoTotalMinutos',
		//'IdRuta',
		//'CodigoEstadoRegistro',
		//'EsDiaFestivo',
		
		
	),
)); ?>
