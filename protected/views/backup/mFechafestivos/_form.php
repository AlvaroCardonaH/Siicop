<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'mfechafestivos-form',
	'enableAjaxValidation'=>true,
        'method'=>'post',
	'type'=>'horizontal',
	'htmlOptions'=>array(
		'enctype'=>'multipart/form-data'
	)
)); ?>
     	<fieldset>
		<legend>
			<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>
		</legend>

	<?php echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span12')); ?>
        		
   <div class="control-group">		
			<div class="span4">

	
         
        <?php echo $form->datepickerRow($model,'FechaFestivo',
                            array('prepend'=>'<i class="icon-calendar"></i>',
                                
                                  'disabled' => true)
                           
                ); ?>

                        </div>   
  </div>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
                        'icon'=>'ok white',  
			'label'=>$model->isNewRecord ? 'Crear' : 'Actualizar',
		)); ?>
              <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'reset',
                        'icon'=>'remove',  
			'label'=>'Limpiar',
		)); ?>
	</div>
</fieldset>

<?php $this->endWidget(); ?>

</div>
