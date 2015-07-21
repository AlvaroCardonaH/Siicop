<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'Mensajeros-form',
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

	<?php echo $form->textFieldRow($model,'Documento',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'PrimerNombre',array('class'=>'span5','maxlength'=>15, 'style'=>'text-transform:uppercase', 'onKeyUp'=>'javascript:this.value=this.value.toUpperCase();')); ?>

	<?php echo $form->textFieldRow($model,'SegundoNombre',array('class'=>'span5','maxlength'=>15, 'style'=>'text-transform:uppercase', 'onKeyUp'=>'javascript:this.value=this.value.toUpperCase();')); ?>

	<?php echo $form->textFieldRow($model,'PrimerApellido',array('class'=>'span5','maxlength'=>15, 'style'=>'text-transform:uppercase', 'onKeyUp'=>'javascript:this.value=this.value.toUpperCase();')); ?>

	<?php echo $form->textFieldRow($model,'SegundoApellido',array('class'=>'span5','maxlength'=>15, 'style'=>'text-transform:uppercase', 'onKeyUp'=>'javascript:this.value=this.value.toUpperCase();')); ?>

	<?php echo $form->dropDownListRow(
                    $model,
                    'IdFlota',
                    CHtml::listData(Flotas::model()->findAll(), 'IdFlota', 'NombreFlota'),
                    array('empty'=>'', 'class'=>'span5')
                    
              );
        
        ?>

	

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
