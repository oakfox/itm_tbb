<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "carreras".
 *
 * @property int $id
 * @property string|null $nombre
 *
 * @property Estudiantes[] $estudiantes
 */
class Carreras extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'carreras';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * Gets query for [[Estudiantes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEstudiantes()
    {
        return $this->hasMany(Estudiantes::className(), ['carrera_id' => 'id']);
    }

    public static function getOcarreras(){
        $carreras=Carreras::find()->asArray()->all();
        return ArrayHelper::map($carreras,'id','nombre');

    }
}
