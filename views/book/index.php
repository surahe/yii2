<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;

$this->title = '管理书籍';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1>图书管理系统</h1>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'name',
        'author',
        'created_at:datetime',
        'updated_at:datetime',
        [
            'header'=>'操作',
            'headerOptions' => ['width' => '8%'],
            'class' => 'yii\grid\ActionColumn',
            'template' => '{update} {delete}',
            'buttons'=>[
                'update' => function ($url, $model, $key){
                    return Html::a('编辑', '#', ['class' => 'j-edit', 'data-toggle' => 'modal', 'data-target' => '#page-modal']);
                },
                'delete'=> function ($url, $model, $key){
                    return  Html::a('删除', ['delete', 'id'=>$model->id],[
                        'data-method'=>'post',
                        'data-confirm' => '确定删除该项？',
                    ] ) ;
                }
             ],
         ],
    ]
]) ?>
<?= Html::a('添加', ['book/add'], ['class' => 'btn btn-primary']) ?>
