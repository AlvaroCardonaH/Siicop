<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-tprogramacionsugeridadetalle-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  ?>


	<?php echo $form->textFieldRow($model,'IdProgramacionSugeridaDetalle',array('class'=>'span5')); ?>

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
		$(":input","#search-tprogramacionsugeridadetalle-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>

