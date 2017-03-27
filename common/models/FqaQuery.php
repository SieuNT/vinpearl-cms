<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Fqa]].
 *
 * @see Fqa
 */
class FqaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Fqa[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Fqa|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
