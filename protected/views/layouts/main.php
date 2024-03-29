<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="language" content="pt-br" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link href='http://fonts.googleapis.com/css?family=Cabin+Condensed:400,500,600,700|Text+Me+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700|Open+Sans:300italic,400italic,600italic,400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/public/css/normalize.min.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/public/css/boilerplate.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/public/css/main.css">

        <script src="<?php echo Yii::app()->request->baseUrl; ?>/public/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>

        <?php echo $content; ?>

		<script src="<?php echo Yii::app()->request->baseUrl; ?>/public/js/vendor/jquery-1.10.1.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/public/js/plugins.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/public/js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
