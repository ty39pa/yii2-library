<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "library".
 *
 * @property integer $id
 * @property string $author
 * @property string $book
 */
class Library extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'library';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author', 'book'], 'required'],
            [['author', 'book'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author' => 'Author',
            'book' => 'Book',
        ];
    }
}
