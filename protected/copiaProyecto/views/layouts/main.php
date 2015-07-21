<!doctype html>
<html>
<head prefix="og: http://ogp.me/ns# <?php echo Yii::app()->fb->appNamespace; ?>: http://ogp.me/ns/apps/<?php echo Yii::app()->fb->appNamespace; ?>#">
	<?php Yii::app()->controller->widget('ext.seo.widgets.SeoHead', array(
		'defaultDescription'=>Yii::app()->params['appDescription'],
		'httpEquivs'=>array('Content-Type'=>'text/html; charset=utf-8', 'Content-Language'=>'en-US'),
		'title'=>array('class'=>'ext.seo.widgets.SeoTitle', 'separator'=>' :: '),
	)); ?>
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.ico">
	<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/styles.css'); ?>
	<?php //Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/doc.css'); ?>
	<!--[if lt IE 9]>
		<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<!-- start Mixpanel --><script type="text/javascript">(function(d,c){var a,b,g,e;a=d.createElement("script");a.type="text/javascript";a.async=!0;a.src=("https:"===d.location.protocol?"https:":"http:")+'//api.mixpanel.com/site_media/js/api/mixpanel.2.js';b=d.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b);c._i=[];c.init=function(a,d,f){var b=c;"undefined"!==typeof f?b=c[f]=[]:f="mixpanel";g="disable track track_links track_forms register register_once unregister identify name_tag set_config".split(" ");for(e=0;e<
g.length;e++)(function(a){b[a]=function(){b.push([a].concat(Array.prototype.slice.call(arguments,0)))}})(g[e]);c._i.push([a,d,f])};window.mixpanel=c})(document,[]);
mixpanel.init("733930f08f73894be317b7fdbfd15229");</script><!-- end Mixpanel -->
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-29040179-1']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head>

<body id="top">

<div id="fb-root"></div>
<script>
	window.fbAsyncInit = function() {
		FB.init({
			appId      : <?php echo Yii::app()->fb->appID; ?>, // App ID
			status     : true, // check login status
			cookie     : true, // enable cookies to allow the server to access the session
			xfbml      : true  // parse XFBML
		});

		// Additional initialization code here
	};

	// Load the SDK Asynchronously
	(function(d){
		var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
		js = d.createElement('script'); js.id = id; js.async = true;
		js.src = "//connect.facebook.net/en_US/all.js";
		d.getElementsByTagName('head')[0].appendChild(js);
	}(document));
</script>


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
                //array('label'=>'Home', 'url'=>Yii::app()->params['webroot'], 'active'=>true),
					array('label'=>'Catalogos', 'url'=>'#','visible' => !Yii::app()->user->isGuest, 'items'=>array(
                    array('label'=>'Gestionar Sedes', 'url'=> array('programacionflotas/Sedes')),
					array('label'=>'Gestionar Flotas', 'url'=> array('programacionflotas/Flotas')),
					array('label'=>'Gestionar Mensajeros', 'url'=> array('programacionflotas/Mensajeros')),
					array('label'=>'Gestionar Horarios', 'url'=>'#', 'itemOptions' => array('class' => 'dropdown-submenu'),
                                    'submenuOptions' => array('class' => 'dropdown-menu'),
                                    'items' => array(
                                                    array('label' => 'Definir Festivos', 'url' => array('programacionflotas/Fechafestivos')),
                                                    array('label' => 'Definir Rango de Horarios', 'url' => array('programacionflotas/Horario')),
                                                    array('label' => 'Definir Horario por Flota', 'url' => array('programacionflotas/Horarioxflota')),
                                                    array('label' => 'Clasificar dias', 'url' => array('programacionflotas/Diassemana')),
                                               ),
                                    ),
					array('label'=>'Gestionar Usuarios', 'url'=>array('programacionflotas/Usuarios')),
                  
                )),
					array('label'=>'Consultas', 'url'=>'#','visible' => !Yii::app()->user->isGuest, 'items'=>array(
                    array('label'=>'Gestionar Resumen reporte pedidos por punto de venta', 'url' => array('programacionflotas/Reportepedidosxpdv')),
					array('label'=>'Gestionar Resumen pedidos por tipo de dia', 'url'=>'#', 'itemOptions' => array('class' => 'dropdown-submenu'),
                                    'submenuOptions' => array('class' => 'dropdown-menu'),
                                    'items' => array(
                                                    array('label' => 'Resumen pedidos dia normal', 'url' => array('programacionflotas/ResumenPedidosNormal')),
                                                    array('label' => 'Resumen pedidos dia festivo', 'url' => array('programacionflotas/ResumenPedidosFestivos')),
                                                    array('label' => 'Resumen pedidos dia cliente fiel', 'url' => array('programacionflotas/ResumenPedidosClientefiel')),
                                                    array('label' => 'Resumen general clasificacion dias', 'url' => array('programacionflotas/ResumenClasificacionDias')),
                                                ),
                                    ),
                    
                   
                )),
				array('label'=>'Programación', 'url'=>'#','visible' => !Yii::app()->user->isGuest, 'items'=>array(
                    array('label'=>'Programación sugerida', 'url' => array('programacionflotas/ProgramacionSugerida')),
                    
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
