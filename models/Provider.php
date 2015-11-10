<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Provider".
 *
 * @property integer $sub_id
 * @property string $sub_name
 */
class Provider extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Provider';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sub_name'], 'required'],
            [['sub_name'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sub_id' => 'Sub ID',
            'sub_name' => 'Sub Name',
        ];
    }
}
