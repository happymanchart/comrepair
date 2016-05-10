<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EngineersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = 'Engineers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="engineers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> เพิ่มเจ้าหน้าที่', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
    <div class="panel panel-success">
        <div class="panel-heading">รายนามช่างซ่อมบำรุง</div>
        <div class="panel-body"> 

            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    // 'id',
                    'name',
                    'position',
                    'speciallist',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>
        </div>
    </div>
</div>    
