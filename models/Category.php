<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Category".
 *
 * @property integer $cat_id
 * @property string $cat_nam
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_nam'], 'required'],
            [['cat_nam'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cat_id' => 'ID de categoría',
            'cat_nam' => 'Nombre de categoría',
        ];
    }
}
