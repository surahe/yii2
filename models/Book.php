<?php

namespace app\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class Book extends ActiveRecord
{
    // public $id;
    // public $name;
    // public $author;
    // public $publishTime;
    // public $createTime;

    public function attributeLabels()
    {
        return [
            'id' => '编号',
            'name' => '书名',
            'author' => '作者',
            'created_at' => '创建时间',
            'updated_at' => '修改时间',
        ];
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    public function rules()
    {
        return [
            [['name', 'author'], 'required']
        ];
    }
}