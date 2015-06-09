<?php

namespace api\modules\v1\models;

/**
 * This is the ActiveQuery class for [[OauthUser]].
 *
 * @see OauthUser
 */
class OauthUsersQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return OauthUser[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return OauthUser|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}