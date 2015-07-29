<?php
/**
 * ImportCSV Module
 *
 * @author Artem Demchenkov <lunoxot@mail.ru>
 * @version 0.0.3
 *
 * module form
 */

$this->setPageTitle('Subir archivo de Reporte');
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links' => array(
        'Reporte'=>array('/programacionflotas/Reportepedidosxpdv'),
        'Crear Programacion Sugerida'
        
    ),
));
?>

<div id="importCsvSteps">
    <h1><?php echo Yii::t('importcsvModule.importcsv', 'Subir'); ?> Archivo CSV</h1>

    <strong><?php echo Yii::t('importcsvModule.importcsv', 'Archivo'); ?> :</strong> <span id="importCsvForFile">&nbsp;</span><br/>
    <strong><?php echo Yii::t('importcsvModule.importcsv', 'Delimitador de Campo '); ?> :</strong> <span id="importCsvForDelimiter">&nbsp;</span><br/>
    <strong><?php echo Yii::t('importcsvModule.importcsv', 'Delimitador de Texto'); ?> :</strong> <span id="importCsvForTextDelimiter">&nbsp;</span><br/>
    <strong><?php echo Yii::t('importcsvModule.importcsv', 'Tabla a insertar'); ?> :</strong> <span id="importCsvForTable">&nbsp;</span><br/><br/>

    <?php echo CHtml::beginForm('','post',array('enctype'=>'multipart/form-data')); ?>
    <?php echo CHtml::hiddenField("fileName", ""); ?>
    <?php echo CHtml::hiddenField("thirdStep", "0"); ?>

    <div id="importCsvFirstStep">
        <div id="importCsvFirstStepResult">
            &nbsp;
        </div>
        <?php  echo CHtml::button(Yii::t('importcsvModule.importcsv', 'Seleccione un archivo CSV'), array("id"=>"importStep1")); ?>
    </div>
    <div id="importCsvSecondStep">
        <div id="importCsvSecondStepResult">
            &nbsp;
        </div>
        <strong><?php echo Yii::t('importcsvModule.importcsv', 'Delimitador de Campo'); ?></strong> <span class="require">*</span><br/>
        <?php echo CHtml::textField("delimiter", $delimiter); ?>
        <br/><br/>
	
	<strong><?php echo Yii::t('importcsvModule.importcsv', 'Delimitador de Texto'); ?></strong><br/>
        <?php echo CHtml::textField("textDelimiter", $textDelimiter); ?>
        <br/><br/>

        <strong><?php echo Yii::t('importcsvModule.importcsv', 'Tabla a insertar'); ?></strong> <span class="require">*</span><br/>
        <?php echo CHtml::dropDownList('table', '', $tablesArray);?><br/><br/>

        <?php
        echo CHtml::ajaxSubmitButton(Yii::t('importcsvModule.importcsv', 'Subir'), '', array(
            'update' => '#importCsvSecondStepResult',
        ));
        ?>
    </div>
    <?php echo CHtml::endForm(); ?>

    <div id="importCsvThirdStep">
        <?php echo CHtml::beginForm('','post'); ?>
            <?php echo CHtml::hiddenField("thirdStep", "1"); ?>
            <?php echo CHtml::hiddenField("thirdDelimiter", ""); ?>
	    <?php echo CHtml::hiddenField("thirdTextDelimiter", ""); ?>
            <?php echo CHtml::hiddenField("thirdTable", ""); ?>
            <?php echo CHtml::hiddenField("thirdFile", ""); ?>
            <div id="importCsvThirdStepResult">
                &nbsp;
            </div>
            <div id="importCsvThirdStepColumnsAndForm">
                <div id="importCsvThirdStepColumns">&nbsp;</div><br/>
                <?php
                    echo CHtml::ajaxSubmitButton(Yii::t('importcsvModule.importcsv', 'Subir Archivo'), '', array(
                        'update' => '#importCsvThirdStepResult',
                    ));
                ?>
            </div>
        <?php echo CHtml::endForm(); ?>
    </div>
    <br/>
    <span id="importCsvBread1">&laquo; <?php echo CHtml::link(Yii::t('importcsvModule.importcsv', 'Reiniciar carga de archivo'), array("/importcsv"));?></span>
    <span id="importCsvBread2"> &laquo; <a href="javascript:void(0)" id="importCsvA2"><?php echo Yii::t('importcsvModule.importcsv', 'Delimitador de Campo').", ".Yii::t('importcsvModule.importcsv', 'Delimitador de Texto')." ".Yii::t('importcsvModule.importcsv', 'y')." ".Yii::t('importcsvModule.importcsv', 'Tabla');?></a></span>
</div>
