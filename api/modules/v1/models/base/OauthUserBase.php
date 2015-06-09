<?php

namespace api\modules\v1\models\base;

use Yii;

/**
* This is the model class for table "oauth_users".
*
    * @property string $username
    * @property string $password
    * @property string $first_name
    * @property string $last_name
*/
class OauthUserBase extends \yii\db\ActiveRecord
{
/**
* @inheritdoc
*/
public static function tableName()
{
return '{{%oauth_users}}';
}

/**
* @inheritdoc
*/
public function rules()
{
return [
            [['username'], 'required'],
            [['username', 'first_name', 'last_name'], 'string', 'max' => 255],
            [['password'], 'string', 'max' => 2000]
        ];
}

/**
* @inheritdoc
*/
public function attributeLabels()
{
return [
    'username' => 'Username',
    'password' => 'Password',
    'first_name' => 'First Name',
    'last_name' => 'Last Name',
];
}
}