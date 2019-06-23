<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TBooks */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbooks-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isbn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'memo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
