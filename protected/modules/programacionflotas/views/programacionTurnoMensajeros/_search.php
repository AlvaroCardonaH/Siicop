<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-programacion-turno-mensajeros-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  ?>


	<?php echo $form->textFieldRow($model,'IdProgramacionTurnoMensajero',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'IdProgramacionTurnoFecha',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'NumeroTurno',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HoraInicio',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'HoraFinal',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'Documento',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'NombreCompleto',array('class'=>'span5','maxlength'=>80)); ?>

	<?php echo $form->textFieldRow($model,'DiferenciaHoras',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HoraFinalAnterior',array('class'=>'span5','maxlength'=>10)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'search white', 'label'=>'Search')); ?>
               <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button', 'icon'=>'icon-remove-sign white', 'label'=>'Reset', 'htmlOptions'=>array('class'=>'btnreset btn-small'))); ?>
	</div>

<?php $this->endWidget(); ?>


<?php $cs = Yii::app()->getClientScript();
$cs->registerCoreScript('jquery');
$cs->registerCoreScript('jquery.ui');
$cs->registerCssFile(Yii::app()->request->baseUrl.'/css/bootstrap/jquery-ui.css');
?>	
   <script>
	$(".btnreset").click(function(){
		$(":input","#search-programacion-turno-mensajeros-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>

