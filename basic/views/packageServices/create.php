<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PackageServices */

$this->title = Yii::t('app', 'Create Package Services');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Package Services'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="package-services-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
