<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Arranger */

$this->title = 'Update Arranger: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Arrangers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="arranger-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
