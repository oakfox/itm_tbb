<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "estudiantes".
 *
 * @property string|null $nombre
 * @property string|null $ap
 * @property string|null $am
 * @property string $no_de_control
 * @property string|null $tel
 * @property string|null $email
 * @property string|null $fecha_nacimiento
 * @property int|null $carrera_id
 *
 * @property Carreras $carrera
 */
class Estudiantes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'estudiantes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_de_control','carrera_id','email','tel'], 'required'],
            [['fecha_nacimiento'], 'safe'],
            [['carrera_id'], 'default', 'value' => null],
            [['carrera_id'], 'integer'],
            [['nombre', 'ap', 'am', 'email'], 'string', 'max' => 50],
            [['no_de_control'], 'string', 'max' => 10],
            [['tel'], 'string', 'max' => 15],
            [['no_de_control'], 'unique'],
            [['email'], 'email'],
            [['carrera_id'], 'exist', 'skipOnError' => true, 'targetClass' => Carreras::className(), 'targetAttribute' => ['carrera_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nombre' => 'Nombre(s)',
            'ap' => 'Apellido Paterno',
            'am' => 'Apellido Materno',
            'no_de_control' => 'No de Control',
            'tel' => 'Teléfono',
            'email' => 'Email',
            'fecha_nacimiento' => 'Fecha de Nacimiento',
            'carrera_id' => 'Carrera',
            'ncarrera_id' => 'Carrera',
        ];
    }

    /**
     * Gets query for [[Carrera]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCarrera()
    {
        return $this->hasOne(Carreras::className(), ['id' => 'carrera_id']);
    }

    function getNcarrera_id(){
        $carreras=Carreras::findOne(['id'=>$this->carrera_id]);
        return $carreras?$carreras->nombre:'S/C';
    }
}
