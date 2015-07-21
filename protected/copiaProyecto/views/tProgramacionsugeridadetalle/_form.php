<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'tprogramacionsugeridadetalle-form',
	'enableAjaxValidation'=>false,
        'method'=>'post',
	'type'=>'horizontal',
	'htmlOptions'=>array(
		'enctype'=>'multipart/form-data'
	)
)); ?>
     	<fieldset>
		<legend>
			<p class="note">Fields with <span class="required">*</span> are required.</p>
		</legend>

	<?php echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span12')); ?>
        		
   <div class="control-group">		
			<div class="span4">

	<?php echo $form->textFieldRow($model,'IdProgramacionSugerida',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'NumeroMensajero',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HoraCero',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HoraUno',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HoraDos',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HoraTres',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HoraCuatro',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HoraCinco',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HoraSeis',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HoraSiete',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HoraOcho',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HoraNueve',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HoraDiez',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HoraOnce',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HoraDoce',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HoraTrece',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HoraCatorce',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HoraQuince',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HoraDieciSeis',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HoraDieciSiete',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HoraDieciOcho',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HoraDieciNueve',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HoraVeinte',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HoraVeintiUna',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HoraVeintiDos',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HoraVeintiTres',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'TotalHorasProgramadas',array('class'=>'span5')); ?>

                        </div>   
  </div>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
                        'icon'=>'ok white',  
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
              <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'reset',
                        'icon'=>'remove',  
			'label'=>'Reset',
		)); ?>
	</div>
</fieldset>

<?php $this->endWidget(); ?>

</div>
