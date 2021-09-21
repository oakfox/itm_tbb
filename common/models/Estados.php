<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "estados".
 *
 * @property int $id
 * @property string $clave
 * @property string $nombre
 * @property string $abrev
 * @property int $activo
 * @property int|null $created_user_id
 * @property int|null $updated_user_id
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Estados extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'estados';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'clave', 'nombre', 'abrev', 'activo'], 'required'],
            [['id', 'activo', 'created_user_id', 'updated_user_id'], 'default', 'value' => null],
            [['id', 'activo', 'created_user_id', 'updated_user_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['clave'], 'string', 'max' => 2],
            [['nombre'], 'string', 'max' => 45],
            [['abrev'], 'string', 'max' => 16],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'clave' => 'Clave',
            'nombre' => 'Nombre',
            'abrev' => 'Abrev',
            'activo' => 'Activo',
            'created_user_id' => 'Created User ID',
            'updated_user_id' => 'Updated User ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public static function getOestados(){
        $estados=Estados::find()->asArray()->all();
        return ArrayHelper::map($estados,'id','nombre');
    }

}
