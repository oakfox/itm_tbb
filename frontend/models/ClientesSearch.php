<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Clientes;

/**
 * ClientesSearch represents the model behind the search form of `common\models\Clientes`.
 */
class ClientesSearch extends Clientes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'estado_id', 'municipio_id', 'created_user_id', 'updated_user_id', 'url_foto'], 'integer'],
            [['nombres', 'ap_paterno', 'ap_materno', 'sexo', 'estado_civil', 'fecha_nac', 'calle_num', 'cp', 'email', 'tel_cel', 'tel_casa', 'nombre_familiar', 'tel_familiar', 'rfc', 'curp', 'created_at', 'updated_at'], 'safe'],
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
        $query = Clientes::find();

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
            'fecha_nac' => $this->fecha_nac,
            'estado_id' => $this->estado_id,
            'municipio_id' => $this->municipio_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_user_id' => $this->created_user_id,
            'updated_user_id' => $this->updated_user_id,
            'url_foto' => $this->url_foto,
        ]);

        $query->andFilterWhere(['ilike', 'nombres', $this->nombres])
            ->andFilterWhere(['ilike', 'ap_paterno', $this->ap_paterno])
            ->andFilterWhere(['ilike', 'ap_materno', $this->ap_materno])
            ->andFilterWhere(['ilike', 'sexo', $this->sexo])
            ->andFilterWhere(['ilike', 'estado_civil', $this->estado_civil])
            ->andFilterWhere(['ilike', 'calle_num', $this->calle_num])
            ->andFilterWhere(['ilike', 'cp', $this->cp])
            ->andFilterWhere(['ilike', 'email', $this->email])
            ->andFilterWhere(['ilike', 'tel_cel', $this->tel_cel])
            ->andFilterWhere(['ilike', 'tel_casa', $this->tel_casa])
            ->andFilterWhere(['ilike', 'nombre_familiar', $this->nombre_familiar])
            ->andFilterWhere(['ilike', 'tel_familiar', $this->tel_familiar])
            ->andFilterWhere(['ilike', 'rfc', $this->rfc])
            ->andFilterWhere(['ilike', 'curp', $this->curp]);

        return $dataProvider;
    }
}
