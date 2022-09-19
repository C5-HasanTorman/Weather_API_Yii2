<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Tempreture $model */

$this->title = 'Update Tempreture: ' . $model->temp_id;
$this->params['breadcrumbs'][] = ['label' => 'Tempretures', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->temp_id, 'url' => ['view', 'temp_id' => $model->temp_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tempreture-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
