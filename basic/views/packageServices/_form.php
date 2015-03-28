<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PackageServices */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="package-services-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'package')->textInput() ?>

    <?= $form->field($model, 'service')->textInput() ?>

    <?= $form->field($model, 'comments')->textInput(['maxlength' => 300]) ?>

    <?= $form->field($model, 'default_price')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'start')->textInput() ?>

    <?= $form->field($model, 'end')->textInput() ?>

    <?= $form->field($model, 'cost')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
