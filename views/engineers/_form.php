<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Engineers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="engineers-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <div class="row">
        
         <div class="col-xs-4 col-sm-4 col-md-4">
             <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
         </div>
         <div class="col-xs-4 col-sm-4 col-md-4">
             <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>
         </div>

         <div class="col-xs-4 col-sm-4 col-md-4">
             <?= $form->field($model, 'speciallist')->textInput(['maxlength' => true]) ?>
         </div>

    </div>
    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
