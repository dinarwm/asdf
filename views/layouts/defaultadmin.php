<?php 
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\VarDumper;
?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

        <?php if (isset($this->blocks['additionalhead'])): ?>
            <?= $this->blocks['additionalhead'] ?>
        <?php endif; ?>


        <!-- Bootstrap Core CSS -->
        <link href="<?php echo Url::base();?>/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo Url::base();?>/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo Url::base();?>/dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo Url::base();?>/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <?php $this->beginBody() ?>
        
        <?= $this->render( '../layouts/header'); ?>
        <div id="page-wrapper">
            <?= $content ?>
        </div>

        <!-- jQuery -->
        <script src="<?php echo Url::base();?>/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo Url::base();?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo Url::base();?>/bower_components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo Url::base();?>/dist/js/sb-admin-2.js"></script>

        <?php if (isset($this->blocks['additionaljs'])): ?>
            <?= $this->blocks['additionaljs'] ?>
        <?php endif; ?>

        <?php $this->endBody() ?>
    </body>

    </html>
<?php $this->endPage() ?>
