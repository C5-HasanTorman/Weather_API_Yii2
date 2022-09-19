<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Tempreture $model */

$this->title = $model->temp_id;
$this->params['breadcrumbs'][] = ['label' => 'Tempretures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tempreture-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'temp_id' => $model->temp_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'temp_id' => $model->temp_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'temp_id',
            'tempreture',
            'city_id',
        ],
    ]) ?>

</div>
