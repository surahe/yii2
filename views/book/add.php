<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Alert;

$this->title = '添加书籍';
$this->params['breadcrumbs'][] = $this->title;

if( Yii::$app->getSession()->hasFlash('success') ) {
	Alert::widget([
		'options' => [
			'class' => 'alert-success',
		],
		'body' => Yii::$app->getSession()->getFlash('success'),
	]);
}
?>
<div class="site-contact">
  <div class="row">
    <div class="col-lg-5">

      <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

          <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
          
          <?= $form->field($model, 'author') ?>

          <div class="form-group">
              <?= Html::submitButton('提交', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
          </div>

      <?php ActiveForm::end(); ?>

    </div>
  </div>
</div>

