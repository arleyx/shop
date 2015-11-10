<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Product".
 *
 * @property integer $pro_id
 * @property string $pro_nam
 * @property integer $pro_pri
 * @property integer $pro_qua
 * @property integer $cat_id
 *
 * @property Category $cat
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pro_nam', 'pro_pri', 'pro_qua', 'cat_id'], 'required'],
            [['pro_pri', 'pro_qua', 'cat_id'], 'integer'],
            [['pro_nam'], 'string', 'max' => 45],
            [['cat_id'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pro_id' => 'ID del Producto',
            'pro_nam' => 'Nombre del Producto',
            'pro_pri' => 'Precio del Producto',
            'pro_qua' => 'Cantidad',
            'cat_id' => 'ID de Categoria',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCat()
    {
        return $this->hasOne(Category::className(), ['cat_id' => 'cat_id']);
    }
}
