<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Estudiantes;

/**
 * EstudiantesSearch represents the model behind the search form of `common\models\Estudiantes`.
 */
class EstudiantesSearch extends Estudiantes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'ap', 'am', 'no_de_control', 'tel', 'email', 'fecha_nacimiento'], 'safe'],
            [['carrera_id'], 'integer'],
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
        $query = Estudiantes::find();

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
            'fecha_nacimiento' => $this->fecha_nacimiento,
            'carrera_id' => $this->carrera_id,
        ]);

        $query->andFilterWhere(['ilike', 'nombre', $this->nombre])
            ->andFilterWhere(['ilike', 'ap', $this->ap])
            ->andFilterWhere(['ilike', 'am', $this->am])
            ->andFilterWhere(['ilike', 'no_de_control', $this->no_de_control])
            ->andFilterWhere(['ilike', 'tel', $this->tel])
            ->andFilterWhere(['ilike', 'email', $this->email]);

        return $dataProvider;
    }
}
