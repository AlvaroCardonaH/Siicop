<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'Reportepedidosxpdv-form',
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

	<?php echo $form->datepickerRow($model,'FechaInicio',
                            array('prepend'=>'<i class="icon-calendar"></i>',
                                    'disabled' => true,
                                    'options'=>array(  
                                            'showAnim'=>'fadeIn',
                                            'yearSuffix'=>'',
                                            'monthNames' => array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"),
                                            'monthNamesShort' => array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic"),
                                            'dayNames' => array('Domingo,Lunes,Martes,Miercoles,Jueves,Viernes,Sabado'),
                                            'dayNamesMin' => array('Do','Lu','Ma','Mi','Ju','Vi','Sa'), 'numberOfMonths'=>2,                                           
                                            'dateFormat'=>'yy-mm-dd',//Date format 'mm/dd/yy','yy-mm-dd','d M, y','d MM, y','DD, d MM, yy'
                                    ),
                                
                            )
                           
                );  
        ?>
                            
        <?php echo $form->datepickerRow($model,'FechaFinal',
                            array('prepend'=>'<i class="icon-calendar"></i>',
                                    'disabled' => true,
                                    'options'=>array(  
                                            'showAnim'=>'fadeIn',
                                            'yearSuffix'=>'',
                                            'monthNames' => array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"),
                                            'monthNamesShort' => array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic"),
                                            'dayNames' => array('Domingo,Lunes,Martes,Miercoles,Jueves,Viernes,Sabado'),
                                            'dayNamesMin' => array('Do','Lu','Ma','Mi','Ju','Vi','Sa'), 'numberOfMonths'=>2,                                           
                                            'dateFormat'=>'yy-mm-dd',//Date format 'mm/dd/yy','yy-mm-dd','d M, y','d MM, y','DD, d MM, yy'
                                    ),
                                
                            )
                           
                );  
        ?>                    
                            
        
             

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
