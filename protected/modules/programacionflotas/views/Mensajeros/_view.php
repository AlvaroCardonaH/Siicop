<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdMensajero')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IdMensajero),array('view','id'=>$data->IdMensajero)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Documento')); ?>:</b>
	<?php echo CHtml::encode($data->Documento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PrimerNombre')); ?>:</b>
	<?php echo CHtml::encode($data->PrimerNombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SegundoNombre')); ?>:</b>
	<?php echo CHtml::encode($data->SegundoNombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PrimerApellido')); ?>:</b>
	<?php echo CHtml::encode($data->PrimerApellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SegundoApellido')); ?>:</b>
	<?php echo CHtml::encode($data->SegundoApellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdFlota')); ?>:</b>
	<?php echo CHtml::encode($data->IdFlota); ?>
	<br />

	<?php /*
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

	*/ ?>

</div>