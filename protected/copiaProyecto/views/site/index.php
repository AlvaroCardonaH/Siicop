<?php
$this->pageTitle = Yii::app()->params['appTitle'];
$this->addMetaProperty('og:title', Yii::app()->params['appTitle']);
$this->addMetaProperty('og:type', 'website');
$this->addMetaProperty('og:url', $this->createUrl('index'));
$this->addMetaProperty('og:image', Yii::app()->request->getBaseUrl(true).'/images/bootstrap-avatar_normal.png');
$this->addMetaProperty('og:site_name', Yii::app()->name);
$this->addMetaProperty('og:locale',Yii::app()->fb->locale);
$this->addMetaProperty('fb:app_id', Yii::app()->fb->appID);

Yii::app()->clientScript->registerScript('siteIndex', "
	// Console \"polyfill\"
	if (!console) {
		console = {};
		console.log = function() {};
	}

	// Prevent jumping to the top of the page when demo links are clicked.
	jQuery('.site-index a').on('click', function(e) {
	    var element = $(this),
	        href = element.attr('href'),
	        toggle = element.attr('data-toggle');

	    if ((href && (href.length === 0 || href === '#')) && !toggle) {
	            return false;
	    }
	});

    // Prevent form submission.
	jQuery('.site-index form').on('submit', false);
");
?>
<br>
<div class="jumbotron">
  
</div>

 