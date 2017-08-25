<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ArrangerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Arrangers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="arranger-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Arranger', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
  [
                    'attribute' => 'user',
                    'value' => 'user0.username',
                ],
           [
                    'attribute' => 'role',
                    'value' => 'role0.role',
                ],
            
          

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
