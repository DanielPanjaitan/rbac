<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Role;
use backend\models\User;

/* @var $this yii\web\View */
/* @var $model backend\models\Arranger */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="arranger-form">

    <?php $form = ActiveForm::begin(); ?>

     <?= $form->field($model, 'role')->dropDownList(
      ArrayHelper::map(Role::find()->all(), 'id', 'role') ,['prompt'=>'Role name']) ?>
    
    <?= $form->field($model, 'user')->dropDownList(
      ArrayHelper::map(User::find()->all(), 'id', 'username'), ['prompt'=>'Select User'] ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
