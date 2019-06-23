<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "t_books".
 *
 * @property int $id ID
 * @property string $name 书名
 * @property string $author 作者
 * @property string $isbn ISBN
 * @property double $price 价格
 * @property string $memo 备注
 * @property string $create_date 创建时间
 */
class TBooks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'author', 'memo'], 'required'],
            [['price'], 'number'],
            [['memo'], 'string'],
            [['create_date'], 'safe'],
            [['name', 'author'], 'string', 'max' => 100],
            [['isbn'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'author' => 'Author',
            'isbn' => 'Isbn',
            'price' => 'Price',
            'memo' => 'Memo',
            'create_date' => 'Create Date',
        ];
    }
}
