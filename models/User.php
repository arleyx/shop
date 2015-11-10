<?php

namespace app\models;

#use yii\base\Object;
use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{
    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;

    const ROLE_ADMIN = 1;
    const ROLE_USER = 2;

    /*private static $users = [
        '100' => [
            'id' => '100',
            'username' => 'admin',
            'password' => 'admin',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
        ],
        '101' => [
            'id' => '101',
            'username' => 'demo',
            'password' => 'demo',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
        ],
    ];*/

    public static function tableName ()
    {
        return 'User';
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        /*return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;*/
        return User::find()->where(['use_id' => $id])->one() != null ? new static(User::find()->where(['use_id' => $id])->one()) : null;
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        /*foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }*/

        if (User::find()->where(['use_access' => $token])->one() != null) {
            return new static(User::find()->where(['use_access' => $token])->one());
        }

        return null;
    }

    public static function isRole($use_role)
    {
        return Yii::$app->user->isGuest ? false : Yii::$app->user->identity->use_role == $use_role;
    }

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        /*foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }*/

        if (User::find()->where(['use_login' => $username])->one() != null) {
            return new static(User::find()->where(['use_login' => $username])->one());
        }

        return null;
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this['use_id'];
        //return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        /*return $this->authKey;*/
        return $this['use_auth'];
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        /*return $this->authKey === $authKey;*/
        return $this['use_auth'] === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        //return $this->password === $password;
        return $this['use_password'] === $password;
    }
}
