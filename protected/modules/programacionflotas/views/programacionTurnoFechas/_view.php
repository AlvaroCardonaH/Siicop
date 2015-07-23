<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdProgramacionTurnoFecha')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IdProgramacionTurnoFecha),array('view','id'=>$data->IdProgramacionTurnoFecha)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdProgramacionTurno')); ?>:</b>
	<?php echo CHtml::encode($data->IdProgramacionTurno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaInicio')); ?>:</b>
	<?php echo CHtml::encode($data->FechaInicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaFinal')); ?>:</b>
	<?php echo CHtml::encode($data->FechaFinal); ?>
	<br />


</div>