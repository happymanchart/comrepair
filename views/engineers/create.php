<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Engineers */

$this->title = 'เพิ่มรายชื่อช่างซ่อม';
$this->params['breadcrumbs'][] = ['label' => 'Engineers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="engineers-create">

    <div class="panel panel-info">
       <div class="panel-heading">ช่างซ่อมบำรุง</div>
      <div class="panel-body">    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
            
        </div>
    </div>    

</div>
