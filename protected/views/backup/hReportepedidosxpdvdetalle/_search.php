<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-hreportepedidosxpdvdetalle-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  ?>


	<?php echo $form->textFieldRow($model,'IdReportePedidosxPdvDetalle',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'IdReportePedidosxPdv',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'NumeroDeRegistro',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'CodigoPdv',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'NombrePdv',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'Caja',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'Factura',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'Valor',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'NombreMensajero',array('class'=>'span5','maxlength'=>80)); ?>

	<?php echo $form->textFieldRow($model,'CelularMensajero',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'NombreCliente',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'DireccionCliente',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'TelefonoCliente',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'EstadoPedido',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'CausalEntrega',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'FechaPos',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'FechaAceptacion',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'TiempoEspera',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'FechaEntrega',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'TiempoTotalMinutos',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'IdRuta',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'CodigoEstadoRegistro',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'EsDiaFestivo',array('class'=>'span5')); ?>

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
		$(":input","#search-hreportepedidosxpdvdetalle-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>

