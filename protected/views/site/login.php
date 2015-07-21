<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);

?>

<h1>Iniciar Sesión</h1>

<p>Por favor introduzca los datos de inicio de sesion:</p>

<div class="form-horizontal" role="form">
    <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'login-form',
            'enableClientValidation'=>true,
            'clientOptions'=>array(
                    'validateOnSubmit'=>true,
            ),
    )); ?>
    
    <br>
    <br>
    <div class="form-group">
        <label class="control-label col-sm-2" for="username">Usuario:</label>
        <div class="col-sm-4">
            <?php echo $form->textfield($model,'username',array('class'=>'form-control','placeholder'=>'Introduzca su usuario')); ?>
            <?php echo $form->error($model,'username',array('class'=>'colorError')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="password">Contraseña:</label>
        <div class="col-sm-4">
            <?php echo $form->passwordField($model,'password',array('class'=>'form-control','placeholder'=>'Introduzca su Contraseña')); ?>
            <?php echo $form->error($model,'password',array('class'=>'colorError')); ?>
        </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-sm-2"></label>
        <div class="col-sm-4">
            <label><?php echo $form->checkBox($model,'rememberMe'); ?> Recuerdame la proxima vez</label>
        </div>
    </div>
    
    <div class="form-group">
        <label class="control-label col-sm-2"></label>
        <div class="col-sm-4">
            <?php echo CHtml::submitButton('Entrar',array('class'=>'btn btn-primary')); ?> 
        </div>
    </div>
    
  



<?php $this->endWidget(); ?>
</div>
