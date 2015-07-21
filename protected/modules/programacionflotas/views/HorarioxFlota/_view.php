<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdHorarioxFlota')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IdHorarioxFlota),array('view','id'=>$data->IdHorarioxFlota)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdFlota')); ?>:</b>
	<?php echo CHtml::encode($data->IdFlota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdHorario')); ?>:</b>
	<?php echo CHtml::encode($data->IdHorario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NumeroPosicion')); ?>:</b>
	<?php echo CHtml::encode($data->NumeroPosicion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EstaHabilitada')); ?>:</b>
	<?php echo CHtml::encode($data->EstaHabilitada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EsHoraPico')); ?>:</b>
	<?php echo CHtml::encode($data->EsHoraPico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdUsuarioGraba')); ?>:</b>
	<?php echo CHtml::encode($data->IdUsuarioGraba); ?>
	<br />

	<?php /*
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