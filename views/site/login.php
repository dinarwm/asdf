<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Login';
?>

<?php $this->beginBlock('additionalhead'); ?>

<?php $this->endBlock(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <?php $form = ActiveForm::begin(); ?>

                        <?= $form->field($model, 'username')->label(false)->textInput(array('placeholder' => 'Email', 'class' => 'form-control')) ?>

                        <?= $form->field($model, 'password')->passwordInput()->label(false)->textInput(array('placeholder' => 'Password', 'class' => 'form-control','type' => 'password')) ?>

                        <?= $form->field($model, 'rememberMe')->checkbox() ?>

                        <?= Html::submitButton('Login', ['class' => 'btn btn-lg btn-success btn-block', 'name' => 'login-button']) ?>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->beginBlock('additionaljs'); ?>

<?php $this->endBlock(); ?>