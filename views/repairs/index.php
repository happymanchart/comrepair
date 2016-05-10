<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RepairsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Repairs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="repairs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Repairs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'department_id',
            'tool_id',
            'problem:ntext',
            'stage',
             'startdate',
             'satatus',
             'remark:ntext',
             'answer',
             'engineer_id',
             'enddate',
             'user_id',
             'createDate',
             'updateDate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
