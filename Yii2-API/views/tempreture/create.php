<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Tempreture $model */

$this->title = 'Create Tempreture';
$this->params['breadcrumbs'][] = ['label' => 'Tempretures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tempreture-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
