<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%pagina}}".
 *
 * @property int $id
 * @property string|null $texto Conteúdo da página
 * @property int|null $livro_id Chave estrangeira de livro
 */
class Pagina extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%pagina}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['texto'], 'string'],
            [['livro_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'texto' => Yii::t('app', 'Conteúdo da página'),
            'livro_id' => Yii::t('app', 'Chave estrangeira de livro'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return PaginaQuery the active query used by this AR class.
     */

     public static function lista()
    {
        return ArrayHelper::map(Livro::find()->all(), 'id', function ($lista){
            return $lista->nome;
        });
    }
    public function getLivro()
    {
        return $this->hasOne(Livro::class, ['id' => 'livro_id']);
    }

    public static function find()
    {
        return new PaginaQuery(get_called_class());
    }
}
