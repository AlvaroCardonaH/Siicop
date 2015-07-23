<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdProgramacionTurnoMensajero')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IdProgramacionTurnoMensajero),array('view','id'=>$data->IdProgramacionTurnoMensajero)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdProgramacionTurnoFecha')); ?>:</b>
	<?php echo CHtml::encode($data->IdProgramacionTurnoFecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NumeroTurno')); ?>:</b>
	<?php echo CHtml::encode($data->NumeroTurno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HoraInicio')); ?>:</b>
	<?php echo CHtml::encode($data->HoraInicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HoraFinal')); ?>:</b>
	<?php echo CHtml::encode($data->HoraFinal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Documento')); ?>:</b>
	<?php echo CHtml::encode($data->Documento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreCompleto')); ?>:</b>
	<?php echo CHtml::encode($data->NombreCompleto); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('DiferenciaHoras')); ?>:</b>
	<?php echo CHtml::encode($data->DiferenciaHoras); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HoraFinalAnterior')); ?>:</b>
	<?php echo CHtml::encode($data->HoraFinalAnterior); ?>
	<br />

	*/ ?>

</div>