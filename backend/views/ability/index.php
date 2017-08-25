<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AbilitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Abilities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ability-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ability', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
    [
                    'attribute' => 'role',
                    'value' => 'role0.role',
                ],
            
            [
                    'attribute' => 'rules',
                    'value' => 'rule0.rule',
                ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
