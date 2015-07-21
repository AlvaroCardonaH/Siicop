<?php
$this->setPageTitle('Reporte Pedidos por Punto de Venta');
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links' => array(
        'Reporte pedidos por punto de venta'=>array('index'),
        'Resumen de pedidos dia normal'
        
    ),
));



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('vresumen-pedidos-normal-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Resumen de pedidos dias normales</h1>
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

<?php
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'vresumen-pedidos-normal-grid',
        //'filter'=>$model,
        'type'=>'striped bordered condensed',
        'template'=>'{summary}{pager}{items}{pager}',
	'dataProvider'=>$model,
        
    
//	'filter'=>$model,
	'columns'=>array(
            
            array(
                        'header'=>'Item #',
                        'htmlOptions'=>array('style'=>'width: 30px; text-align: center;'),
                        'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
                ),
		
           
            array(
			'header'=>'Hora Inicio',
			'name'=>'HoraInicio',
                        
		),
            array(
			'header'=>'Hora Final',
			'name'=>'HoraFinal',	
		),
            array(
			'header'=>'Lunes',
			'name'=>'Lunes',	
		),
            array(
			'header'=>'Martes',
			'name'=>'Martes',	
		),
		array(
			'header'=>'Miercoles',
			'name'=>'Miercoles',	
		),
		array(
			'header'=>'Jueves',
			'name'=>'Jueves',	
		),
		array(
			'header'=>'Viernes',
			'name'=>'Viernes',	
		),
		array(
			'header'=>'Sabado',
			'name'=>'Sabado',	
		),
		
		
	),
)); 


?>
