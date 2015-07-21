<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdProgramacionSugerida')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IdProgramacionSugerida),array('view','id'=>$data->IdProgramacionSugerida)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdClasificacionDia')); ?>:</b>
	<?php echo CHtml::encode($data->IdClasificacionDia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdReportePedidosxPdv')); ?>:</b>
	<?php echo CHtml::encode($data->IdReportePedidosxPdv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaInicio')); ?>:</b>
	<?php echo CHtml::encode($data->FechaInicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaFinal')); ?>:</b>
	<?php echo CHtml::encode($data->FechaFinal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdUsuarioGraba')); ?>:</b>
	<?php echo CHtml::encode($data->IdUsuarioGraba); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaGraba')); ?>:</b>
	<?php echo CHtml::encode($data->FechaGraba); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('IdUsuarioUltimaModifica')); ?>:</b>
	<?php echo CHtml::encode($data->IdUsuarioUltimaModifica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaUltimaModifica')); ?>:</b>
	<?php echo CHtml::encode($data->FechaUltimaModifica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodigoEstadoRegistro')); ?>:</b>
	<?php echo CHtml::encode($data->CodigoEstadoRegistro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DescripcionProgramacionSugerida')); ?>:</b>
	<?php echo CHtml::encode($data->DescripcionProgramacionSugerida); ?>
	<br />

	*/ ?>

</div>