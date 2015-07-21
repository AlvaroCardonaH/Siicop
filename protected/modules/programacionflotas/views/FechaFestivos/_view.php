<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdFechaFestivo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IdFechaFestivo),array('view','id'=>$data->IdFechaFestivo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaFestivo')); ?>:</b>
	<?php echo CHtml::encode($data->FechaFestivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdUsuarioGraba')); ?>:</b>
	<?php echo CHtml::encode($data->IdUsuarioGraba); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaGraba')); ?>:</b>
	<?php echo CHtml::encode($data->FechaGraba); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdUsuarioUltimaModifica')); ?>:</b>
	<?php echo CHtml::encode($data->IdUsuarioUltimaModifica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaUltimaModifica')); ?>:</b>
	<?php echo CHtml::encode($data->FechaUltimaModifica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodigoEstadoRegistro')); ?>:</b>
	<?php echo CHtml::encode($data->CodigoEstadoRegistro); ?>
	<br />


</div>