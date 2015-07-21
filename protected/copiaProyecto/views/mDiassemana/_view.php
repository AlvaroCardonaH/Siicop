<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('NumeroDiaSemana')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NumeroDiaSemana),array('view','id'=>$data->NumeroDiaSemana)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreDiaSemana')); ?>:</b>
	<?php echo CHtml::encode($data->NombreDiaSemana); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdClasificacionDia')); ?>:</b>
	<?php echo CHtml::encode($data->IdClasificacionDia); ?>
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