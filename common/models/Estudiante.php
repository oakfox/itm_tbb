<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "estudiante".
 *
 * @property string|null $nombre
 * @property string|null $ap
 * @property string|null $am
 * @property string $no_de_control
 */
class Estudiante extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'estudiante';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_de_control'], 'required'],
            [['nombre', 'ap', 'am'], 'string', 'max' => 50],
            [['no_de_control'], 'string', 'max' => 10],
            [['no_de_control'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nombre' => 'Nombre',
            'ap' => 'Ap',
            'am' => 'Am',
            'no_de_control' => 'No De Control',
        ];
    }
}
