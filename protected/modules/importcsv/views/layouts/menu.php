<!doctype html>
<html>
<head>
	<?php Yii::app()->controller->widget('ext.seo.widgets.SeoHead', array(
		'defaultDescription'=>Yii::app()->params['appDescription'],
		'httpEquivs'=>array('Content-Type'=>'text/html; charset=utf-8'),
		'title'=>array('class'=>'ext.seo.widgets.SeoTitle', 'separator'=>' :: '),
	)); ?>
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.ico">
	<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/styles.css'); ?>
	
</head>

<body id="top">


<div class="container">

<?php $this->widget('bootstrap.widgets.TbNavbar', array(
//    'fixed'=>'top',
//    'brand'=>false,
//	'type'=>'inverse',
	'brand'=>CHtml::encode(Yii::app()->name),
    'collapse'=>true,
	'htmlOptions'=>array('class'=>'subnav'),
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'scrollspy'=>'.navbar',
            'items'=>array(
               // array('label'=>'Programacion Turnos Flota', 'url'=>array('/programacionflotas')),
					array('label'=>'Catalogos', 'url'=>'#','visible' => !Yii::app()->user->isGuest, 'items'=>array(
                    array('label'=>'Gestionar Sedes', 'url'=> array('/programacionflotas/Sedes/index')),
					array('label'=>'Gestionar Flotas', 'url'=> array('/programacionflotas/Flotas/index')),
					array('label'=>'Gestionar Mensajeros', 'url'=> array('/programacionflotas/Mensajeros/index')),
					array('label'=>'Gestionar Horarios', 'url'=>'#', 'itemOptions' => array('class' => 'dropdown-submenu'),
                                    'submenuOptions' => array('class' => 'dropdown-menu'),
                                    'items' => array(
                                                    array('label' => 'Definir Festivos', 'url' => array('/programacionflotas/Fechafestivos/index')),
                                                    array('label' => 'Definir Rango de Horarios', 'url' => array('/programacionflotas/Horario/index')),
                                                    array('label' => 'Definir Horario por Flota', 'url' => array('/programacionflotas/Horarioxflota/index')),
                                                    array('label' => 'Clasificar dias', 'url' => array('/programacionflotas/Diassemana/index')),
													array('label' => 'Asignar Dia Cliente Fiel por Flota', 'url' => array('/programacionflotas/DiasClienteFiel/index')),
                                               ),
                                    ),
					array('label'=>'Gestionar Usuarios', 'url'=>array('/programacionflotas/Usuarios/index')),
                  
                )),
					array('label'=>'Consultas', 'url'=>'#','visible' => !Yii::app()->user->isGuest, 'items'=>array(
                    array('label'=>'Gestionar Resumen reporte pedidos por punto de venta', 'url' => array('/programacionflotas/Reportepedidosxpdv/index')),
					array('label'=>'Gestionar Resumen pedidos por tipo de dia', 'url'=>'#', 'itemOptions' => array('class' => 'dropdown-submenu'),
                                    'submenuOptions' => array('class' => 'dropdown-menu'),
                                    'items' => array(
                                                    array('label' => 'Resumen pedidos dia normal', 'url' => array('/programacionflotas/vResumenPedidosNormal/index')),
                                                    array('label' => 'Resumen pedidos dia festivo', 'url' => array('/programacionflotas/vResumenPedidosFestivos/index')),
                                                    array('label' => 'Resumen pedidos dia cliente fiel', 'url' => array('/programacionflotas/vResumenPedidosClientefiel/index')),
                                                    array('label' => 'Resumen general clasificacion dias', 'url' => array('/programacionflotas/ResumenClasificacionDias/index')),
                                                ),
                                    ),
                    
                   
                )),
				array('label'=>'Programación', 'url'=>'#','visible' => !Yii::app()->user->isGuest, 'items'=>array(
                    array('label'=>'Programación sugerida', 'url' => array('/programacionflotas/ProgramacionSugerida/index')),
                    
                    //array('label'=>'NAV HEADER'),
                )),
	    ),
			'htmlOptions'=>array('class'=>'pull-left'),
        ),
		array(
			'class'=>'bootstrap.widgets.TbMenu',
			'items'=>array(
			    array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
			),
			'htmlOptions'=>array('class'=>'pull-right'),
		),

    ),
)); ?>
</div>	
	
<div class="container2">
	<?php echo $content; ?>

	<hr />
	

</div>

<?php Yii::app()->clientScript->registerScriptFile('http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f362fc83fc39768', CClientScript::POS_END); ?>

</body>
</html>
