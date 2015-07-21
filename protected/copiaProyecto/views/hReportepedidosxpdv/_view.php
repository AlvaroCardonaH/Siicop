<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdReportePedidosxPdv')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IdReportePedidosxPdv),array('view','id'=>$data->IdReportePedidosxPdv)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaInicio')); ?>:</b>
	<?php echo CHtml::encode($data->FechaInicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaFinal')); ?>:</b>
	<?php echo CHtml::encode($data->FechaFinal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdFlota')); ?>:</b>
	<?php echo CHtml::encode($data->IdFlota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodigoEstadoReporte')); ?>:</b>
	<?php echo CHtml::encode($data->CodigoEstadoReporte); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdUsuarioGraba')); ?>:</b>
	<?php echo CHtml::encode($data->IdUsuarioGraba); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaGraba')); ?>:</b>
	<?php echo CHtml::encode($data->FechaGraba); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CodigoEstadoRegistro')); ?>:</b>
	<?php echo CHtml::encode($data->CodigoEstadoRegistro); ?>
	<br />

	*/ ?>

</div>