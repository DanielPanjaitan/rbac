<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Arranger */

$this->title = $model->user0->username;
$this->params['breadcrumbs'][] = ['label' => 'Arrangers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="arranger-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
          [
                    'attribute' => 'role',
                    'value' => $model->role0->role,
                ],
            [
                    'attribute' => 'user',
                    'value' => $model->user0->username,
                ],
        ],
    ]) ?>

</div>
