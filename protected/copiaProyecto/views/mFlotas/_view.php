<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdFlota')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IdFlota),array('view','id'=>$data->IdFlota)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreFlota')); ?>:</b>
	<?php echo CHtml::encode($data->NombreFlota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdSede')); ?>:</b>
	<?php echo CHtml::encode($data->IdSede); ?>
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

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CodigoEstadoRegistro')); ?>:</b>
	<?php echo CHtml::encode($data->CodigoEstadoRegistro); ?>
	<br />

	*/ ?>

</div>