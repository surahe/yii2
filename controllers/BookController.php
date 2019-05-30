<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Book;
use yii\helpers\Console;
use yii\data\ArrayDataProvider;

class BookController extends Controller
{
    public function actionIndex()
    {
        $query = Book::find()->all();

        
        $dataProvider = new ArrayDataProvider([
            'key'=>'id',
            'allModels' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [
                'attributes' => ['id', 'name', 'email'],
            ],
        ]); 


        // $pagination = new Pagination([
        //     'defaultPageSize' => 5,
        //     'totalCount' => $query->count(),
        // ]);

        // $books = $query->orderBy('id')
        //     ->offset($pagination->offset)
        //     ->limit($pagination->limit)
        //     ->all();

        return $this->render('index', [
            'dataProvider' =>$dataProvider
        ]);
    }

    public function actionAdd()
    
    {
        $model = new Book;
        $request = Yii::$app->request;
        if ($model->load($request->post()) && $model->validate()) {
            $book = new Book();
            $book->setAttributes($request->post('Book'));
            $book->save();
            \Yii::$app->getSession()->setFlash('success', '创建成功');
        }
        $model->name = '';
        $model->author = '';
        return $this->render('add', ['model' => $model]);
    }
}