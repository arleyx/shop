<?php
namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class RegisterForm extends ActiveRecord
{
    public static function tableName()
    {
        return 'User';
    }

    public function rules ()
    {
        return [[['use_login','use_password','use_name','use_document','use_address','use_city','use_mail','use_phone','use_cell','use_pay'], 'required']];
    }
}
