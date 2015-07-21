<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-tresumen-clasificacion-dias-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  ?>


	<?php echo $form->textFieldRow($model,'IdReportePedidosxPdv',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'IdClasificacionDia',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'NumeroPosicion',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'IdHorario',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HoraInicio',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'HoraFinal',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'Lunes_Servicios',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'Numero_Mensajeros_Lunes',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'Martes_Servicios',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'Numero_Mensajeros_Martes',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'Miercoles_Servicios',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'Numero_Mensajeros_Miercoles',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'Jueves_Servicios',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'Numero_Mensajeros_Jueves',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'Viernes_Servicios',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'Numero_Mensajeros_Viernes',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'Sabado_Servicios',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'Numero_Mensajeros_Sabado',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'Domingo_Servicios',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'Numero_Mensajeros_Domingo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'ClienteFiel_Servicios',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'Numero_Mensajeros_ClienteFiel',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'Promedio_Mensajeros_Hora_Normal',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'Promedio_Mensajeros_Hora_Festivo',array('class'=>'span5')); ?>

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
		$(":input","#search-tresumen-clasificacion-dias-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>

