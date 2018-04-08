<?php

namespace backend\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\Models\Core;

/**
 * CoreSearch represents the model behind the search form of `backend\Models\Core`.
 */
class CoreSearch extends Core
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_core', 'base_datos', 'usuario', 'clave', 'ip', 'nombre_sistema', 'sigla_sistema', 'ruta'], 'safe'],
            [['puerto', 'activo'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Core::find();

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
            'puerto' => $this->puerto,
            'activo' => $this->activo,
        ]);

        $query->andFilterWhere(['like', 'id_core', $this->id_core])
            ->andFilterWhere(['like', 'base_datos', $this->base_datos])
            ->andFilterWhere(['like', 'usuario', $this->usuario])
            ->andFilterWhere(['like', 'clave', $this->clave])
            ->andFilterWhere(['like', 'ip', $this->ip])
            ->andFilterWhere(['like', 'nombre_sistema', $this->nombre_sistema])
            ->andFilterWhere(['like', 'sigla_sistema', $this->sigla_sistema])
            ->andFilterWhere(['like', 'ruta', $this->ruta]);

        return $dataProvider;
    }
}
