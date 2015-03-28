<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClientUsers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="client-users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'client')->textInput() ?>

    <?= $form->field($model, 'firstName')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'lastName')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'NIPT')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'branch')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'cel')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
