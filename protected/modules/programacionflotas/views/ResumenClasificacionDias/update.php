<?php
$this->breadcrumbs=array(
	'Resumen Clasificacion Diases'=>array('index'),
	$model->IdResumenClasificacionDia=>array('view','id'=>$model->IdReportePedidosxPdv),
	'Update',
);

?>





<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>