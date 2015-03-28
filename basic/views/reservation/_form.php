<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Reservation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reservation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'client')->textInput() ?>

    <?= $form->field($model, 'packageservice')->textInput() ?>

    <?= $form->field($model, 'priceoffer')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'finalprice')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'fullypaid')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'closed_deal')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'amount_paid')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'cost')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
