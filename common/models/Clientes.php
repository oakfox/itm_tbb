<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property int $id
 * @property string $nombres
 * @property string $ap_paterno
 * @property string $ap_materno
 * @property string|null $sexo H-Hombre,M-mujer
 * @property string|null $estado_civil
 * @property string|null $fecha_nac
 * @property string|null $calle_num
 * @property int|null $estado_id
 * @property string|null $municipio_id
 * @property string|null $cp
 * @property string|null $email
 * @property string $tel_cel
 * @property string|null $tel_casa
 * @property string|null $nombre_familiar
 * @property string|null $tel_familiar
 * @property string|null $rfc
 * @property string|null $curp
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property int|null $created_user_id
 * @property int|null $updated_user_id
 * @property string|null $url_foto
 */
class Clientes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombres', 'ap_paterno', 'ap_materno', 'tel_cel','email'], 'required'],
            [['fecha_nac', 'created_at', 'updated_at'], 'safe'],
            [['estado_id', 'created_user_id', 'updated_user_id'], 'default', 'value' => null],
            [['estado_id', 'created_user_id', 'updated_user_id'], 'integer'],
            [['nombres', 'ap_paterno', 'ap_materno'], 'string', 'max' => 70],
            [['sexo', 'estado_civil'], 'string', 'max' => 1],
            [['calle_num', 'email', 'nombre_familiar'], 'string', 'max' => 100],
            [[ 'email'], 'email'],
            [['cp'], 'string', 'max' => 5],
            [['municipio_id'], 'string', 'max' => 50],
            [['url_foto'], 'string', 'max' => 100],
            [['tel_cel', 'tel_casa', 'tel_familiar'], 'string', 'max' => 15],
            [['rfc'], 'string', 'max' => 13],
            [['curp'], 'string', 'max' => 18],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombres' => 'Nombre(s)*',
            'ap_paterno' => 'Apellido Paterno *',
            'ap_materno' => 'Apellido Materno *',
            'sexo' => 'Sexo',
            'nsexo' => 'Sexo',
            'estado_civil' => 'Estado Civil',
            'nestado_civil' => 'Estado Civil',
            'fecha_nac' => 'Fecha Nacimiento',
            'calle_num' => 'Calle y Número',
            'estado_id' => 'Estado',
            'nestado_id' => 'Estado',
            'municipio_id' => 'Municipio',
            'cp' => 'Código Postal',
            'email' => 'Email',
            'tel_cel' => 'Tel. Cel *',
            'tel_casa' => 'Tel. Casa',
            'nombre_familiar' => 'Familiar',
            'tel_familiar' => 'Tel. del Familiar',
            'rfc' => 'RFC',
            'curp' => 'CURP',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_user_id' => 'Created User ID',
            'updated_user_id' => 'Updated User ID',
            'url_foto' => 'Foto',
            'nurl_foto' => 'Foto',
        ];
    }

    function getNsexo(){
        if($this->sexo=='H'){
            return 'Hombre';
        }else if($this->sexo=='M'){
            return 'Mujer';
        }else {
            return '--';
        }
    }
    function getOestado_civil(){
        return [
            'S'=>'Soltero(a)',
            'C'=>'Casado(a)',
            'V'=>'Viudo(a)',
            'D'=>'Divorciado(a)',
            'U'=>'Unión Libre',
        ];
    }

    function getNestado_civil(){
        return $this->getOestado_civil()[$this->estado_civil];
    }

    function getNestado_id(){
        $est=Estados::findOne(['id'=>$this->estado_id]);
        return $est?$est->nombre:'--';
    }

    function getNurl_foto(){
        return '<img src="'. \yii\helpers\Url::base().'/uploads/img/'.$this->url_foto.'" width="30px" class="rounded float-left" alt="...">';
    }
}
