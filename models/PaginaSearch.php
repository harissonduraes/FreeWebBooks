<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pagina;
use app\models\Livro;

/**
 * PaginaSearch represents the model behind the search form of `app\models\Pagina`.
 */
class PaginaSearch extends Pagina
{
    /**
     * {@inheritdoc}
     */

    public $livroTitulo;

    public function rules()
    {
        return [
            [['id', 'livro_id'], 'integer'],
            [['texto'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Pagina::find();

        // junção com a tabela Livro e seleção do título do livro
        $query->joinWith('livro');
        $query->select([
            'pagina.*',
            'livroTitulo' => 'livro.nome',
        ]);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'livro_id' => $this->livro_id,
        ]);

        $query->andFilterWhere(['like', 'texto', $this->texto]);

        return $dataProvider;
    }
}
