<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "IS_Core".
 *
 * @property int $id_core
 * @property string $base_datos
 * @property string $usuario
 * @property string $clave
 * @property string $ip
 * @property int $puerto
 * @property string $nombre_sistema
 * @property string $sigla_sistema
 * @property int $activo
 */
class Core extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'IS_Core';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['base_datos', 'usuario', 'clave', 'ip', 'puerto', 'nombre_sistema', 'sigla_sistema', 'ruta'], 'required'],
            [['base_datos', 'usuario', 'clave', 'ip', 'nombre_sistema', 'sigla_sistema', 'ruta'], 'string'],
            [['puerto', 'activo'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_core' => 'Id Core',
            'base_datos' => 'Base Datos',
            'usuario' => 'Usuario BD',
            'clave' => 'Clave BD',
            'ip' => 'Ip Servidor',
            'puerto' => 'Puerto',
            'ruta' => 'Ruta del Sistema',
            'nombre_sistema' => 'Nombre Sistema',
            'sigla_sistema' => 'Sigla Sistema',
            'activo' => 'Activo',
        ];
    }
}
