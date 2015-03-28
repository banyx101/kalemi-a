<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReservationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reservation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'client') ?>

    <?= $form->field($model, 'packageservice') ?>

    <?= $form->field($model, 'priceoffer') ?>

    <?= $form->field($model, 'finalprice') ?>

    <?php // echo $form->field($model, 'fullypaid') ?>

    <?php // echo $form->field($model, 'closed_deal') ?>

    <?php // echo $form->field($model, 'amount_paid') ?>

    <?php // echo $form->field($model, 'cost') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
