<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-vresumen-pedidos-clientefiel-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  ?>


	<?php echo $form->textFieldRow($model,'IdSede',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'NombreSede',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'IdReportePedidosxPdv',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'IdFlota',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'NombreFlota',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'IdClasificacionDia',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'NombreClasificacionDia',array('class'=>'span5','maxlength'=>16)); ?>

	<?php echo $form->textFieldRow($model,'NumeroPosicion',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'IdHorario',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HoraInicio',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'HoraFinal',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'NumeroServicios',array('class'=>'span5','maxlength'=>16)); ?>

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
		$(":input","#search-vresumen-pedidos-clientefiel-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>

