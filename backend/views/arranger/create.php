<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Arranger */

$this->title = 'Create Arranger';
$this->params['breadcrumbs'][] = ['label' => 'Arrangers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="arranger-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
