<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdSede')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IdSede),array('view','id'=>$data->IdSede)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreSede')); ?>:</b>
	<?php echo CHtml::encode($data->NombreSede); ?>
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