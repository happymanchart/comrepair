<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Repairs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="repairs-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">       

        <div class="col-xs-4 col-sm-4 col-md-4">
            <?= $form->field($model, 'department_id')->textInput() ?>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8">
            <?= $form->field($model, 'tool_id')->textInput() ?>
        </div>	
    </div>

    <div class="row">      

        <div class="col-xs-12 col-sm-12 col-md-12">
            <?= $form->field($model, 'problem')->textarea(['rows' => 8]) ?>
        </div>

    </div>
    <div class="row">      

        <div class="col-xs-4 col-sm-4 col-md-4">
            <?=
            $form->field($model, 'stage')->dropDownList([
                'ด่วนที่สุด' => 'ด่วนที่สุดๆๆ',
                'รอได้ภายใน 1 วัน' => 'รอได้ภายใน 1 วัน',
                'รอได้ภายใน 3 วัน' => 'รอได้ภายใน 3 วัน',
                'รอได้ภายใน 7 วัน' => 'รอได้ภายใน 7 วัน',
                    ], ['prompt' => '--ระบุระยะเวลารอคอย--'])
            ?>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <?= $form->field($model, 'startdate')->textInput() ?>
        </div>	
        <div class="col-xs-4 col-sm-4 col-md-4">
            <?=
            $form->field($model, 'satatus')->dropDownList([ 'รอรับงาน' => 'รอรับงาน',
                'รับงานแล้ว' => 'รับงานแล้ว',], ['prompt' => ''])
            ?>
        </div>	
    </div>
    <diV class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
<?= $form->field($model, 'remark')->textarea(['rows' => 6]) ?>
        </div>
    </diV>
    <div class="row">       

        <div class="col-xs-4 col-sm-4 col-md-4">
            <?=
            $form->field($model, 'answer')->dropDownList([ 'รอซ่อม' => 'รอซ่อม',
                'กำลังซ่อม' => 'กำลังซ่อม', 'ซ่อมเสร็จแล้ว' => 'ซ่อมเสร็จแล้ว',
                'ซ่อมไม่ได้' => 'ซ่อมไม่ได้',], ['prompt' => ''])
            ?>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <?= $form->field($model, 'enddate')->textInput() ?>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
<?= $form->field($model, 'engineer_id')->textInput() ?>
        </div>	
    </div>
    <div class="row">      

        <div class="col-xs-4 col-sm-4 col-md-4">
            <?= $form->field($model, 'user_id')->textInput() ?>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <?= $form->field($model, 'createDate')->textInput() ?>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
<?= $form->field($model, 'updateDate')->textInput() ?>
        </div>	
    </div>


    <div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
