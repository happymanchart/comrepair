<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Engineers */

$this->title = 'แก้ไขรายชื่อช่าง : ' . $model->name . ' - '. $model->position . ' - '. $model->speciallist;
$this->params['breadcrumbs'][] = ['label' => 'Engineers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="engineers-update">
    <div class="panel panel-info">
        <div class="panel-heading">แก้ไขช่างซ่อมบำรุง</div>
        <div class="panel-body">
            <h3><?= Html::encode($this->title) ?></h3>

            <?=
            $this->render('_form', [
                'model' => $model,
            ])
            ?>
        </div>
    </div>
</div>
