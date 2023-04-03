<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%livro}}".
 *
 * @property int $id
 * @property string $nome Nome do livro
 * @property string|null $descricao Descrição do livro
 * @property string|null $imagemUrl Rota da imagem
 */
class Livro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%livro}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome', 'descricao', 'imagemUrl'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nome' => Yii::t('app', 'Nome do livro'),
            'descricao' => Yii::t('app', 'Descrição do livro'),
            'imagemUrl' => Yii::t('app', 'Endereço da imagem'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return LivroQuery the active query used by this AR class.
     */

     public function getPaginas()
     {
         return $this->hasMany(Pagina::class, ['livro_id' => 'id']);
     }
    
    public static function find()
    {
        return new LivroQuery(get_called_class());
    }
}
