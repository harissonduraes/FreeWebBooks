<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%pessoa}}".
 *
 * @property int $id
 * @property string $nome Nome do usuário
 * @property string $senha
 */
class Pessoa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%pessoa}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'senha'], 'required'],
            [['nome', 'senha'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nome' => Yii::t('app', 'Nome do usuário'),
            'senha' => Yii::t('app', 'Senha'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return PessoaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PessoaQuery(get_called_class());
    }
}
