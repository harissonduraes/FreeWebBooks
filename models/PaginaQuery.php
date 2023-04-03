<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Pagina]].
 *
 * @see Pagina
 */
class PaginaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Pagina[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Pagina|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
