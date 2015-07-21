<?php
$this->setPageTitle('Reporte Pedidos por Punto de Venta');
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links' => array(
        'Reporte pedidos por punto de venta'=>array('index'),
        'Resumen de pedidos dia cliente fiel'
        
    ),
));



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('vresumen-pedidos-clientefiel-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Resumen de pedidos dias cliente fiel</h1>
<p><b>Reporte por punto de venta #: </b><?php echo $id = Yii::app()->getRequest()->getParam('id'); ?></p>
<p><b>Fecha Inicio: </b><?php echo Yii::app()->getRequest()->getParam('fechainicio'); ?></p>
<p><b>Fecha Final: </b><?php echo Yii::app()->getRequest()->getParam('fechafinal'); ?></p>
<p><b>Flota: </b><?php echo Yii::app()->getRequest()->getParam('flota'); ?></p>
<?php
$result = Yii::app()->db->createCommand("SELECT S.NombreSede
FROM m_sedes S, m_flotas F, h_reportepedidosxpdv R 
WHERE S.IdSede = F.IdSede
AND F.IdFlota = R.IdFlota
AND R.IdReportePedidosxPdv = $id");
$res    = $result->query();
foreach($res as $item)
{
?>
<p><b>Sede: </b><?php echo $item['NombreSede'];  ?></p>
<?php
}
?>




<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'vresumen-pedidos-clientefiel-grid',
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
                'HoraInicio',
		'HoraFinal',
                'NumeroServicios',
		/*'IdSede',
		'NombreSede',
		'IdReportePedidosxPdv',
		'IdFlota',
		'NombreFlota',
		'IdClasificacionDia',
		
		'NombreClasificacionDia',
		'NumeroPosicion',
		'IdHorario',
		
		
		*/
		
	),
)); ?>
