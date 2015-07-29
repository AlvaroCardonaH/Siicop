<?php
/**
 * ImportCSV Module
 *
 * @author Artem Demchenkov <lunoxot@mail.ru>
 * @version 0.0.3
 *
 * Import result
 */

if($error==1) {

    // first error: No one column is selected

    echo("<span class='importCsvError'>".Yii::t('importcsvModule.importcsv', 'Error').": ".Yii::t('importcsvModule.importcsv', 'No se ha seleccionado ninguna columna')."</span>");
}
elseif($error==2) {

    // second error: Items per one request must not be empty
    
    echo("<span class='importCsvError'>".Yii::t('importcsvModule.importcsv', 'Error').": '".Yii::t('importcsvModule.importcsv', 'Elementos por peticion')."' - ".Yii::t('importcsvModule.importcsv', 'No debe estar vacio')."</span>");
}
elseif($error==3) {

    // third error: Items per one request must be a number
    
    echo("<span class='importCsvError'>".Yii::t('importcsvModule.importcsv', 'Error').": '".Yii::t('importcsvModule.importcsv', 'Elementos por peticion')."' - ".Yii::t('importcsvModule.importcsv', 'Debe ser un numero')."</span>");
}
elseif($error==4) {

    // fourth error: Keys for compare must be selected (only for second and third modes)
    
    echo("<span class='importCsvError'>".Yii::t('importcsvModule.importcsv', 'Error').": ".Yii::t('importcsvModule.importcsv', 'Para este Modo')." '".Yii::t('importcsvModule.importcsv', 'Llaves para comparar')."' - ".Yii::t('importcsvModule.importcsv', 'debe estar seleccionado')."</span>");
}
elseif($error==0) {

    // No errors. The End

    if(empty($error_array)) {
        $strings = Yii::t('importcsvModule.importcsv', 'No');
    }
    else {
        $errorsLength = sizeof($error_array);
        for($k=0; $k<$errorsLength; $k++) {
           $strings = ($k == 0) ? $errorsLength[$k] : ", ".$errorsLength[$k];
        }
    }
    
    echo "<span class='importCsvNoError'>".Yii::t('importcsvModule.importcsv', 'Se subio correctamente')."</span>.<br/>".Yii::t('importcsvModule.importcsv', 'Errores en Filas').": ".$strings."<br/>".CHtml::link(Yii::t('importcsvModule.importcsv', 'Ver Reporte'), array("/programacionflotas/Reportepedidosxpdv/index"))."</span>.<br/>";
	?><span id="importCsvBread1">&laquo;</span>
	<?php
    ?>
	
    <script type="text/javascript">
        toEnd();
    </script>
    <?php
}
?>
