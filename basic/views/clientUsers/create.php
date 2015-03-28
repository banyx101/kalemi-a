<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ClientUsers */

$this->title = Yii::t('app', 'Create Client Users');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Client Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="client-users-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
