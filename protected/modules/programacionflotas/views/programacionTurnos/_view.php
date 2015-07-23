<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdProgramacionTurno')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IdProgramacionTurno),array('view','id'=>$data->IdProgramacionTurno)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdProgramacionSugerida')); ?>:</b>
	<?php echo CHtml::encode($data->IdProgramacionSugerida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdFlota')); ?>:</b>
	<?php echo CHtml::encode($data->IdFlota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdClasificacionDia')); ?>:</b>
	<?php echo CHtml::encode($data->IdClasificacionDia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaInicial')); ?>:</b>
	<?php echo CHtml::encode($data->FechaInicial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaFinal')); ?>:</b>
	<?php echo CHtml::encode($data->FechaFinal); ?>
	<br />


</div>