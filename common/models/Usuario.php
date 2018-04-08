<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "is_usuario".
 *
 * @property integer $id_usuario
 * @property string $usuario
 * @property string $correo
 * @property string $cedula
 * @property string $clave
 * @property string $nombre
 * @property string $apellido
 * @property string $sexo
 * @property string $respuesta_seguridad
 * @property string $fecha_registro
 * @property string $telefono
 * @property integer $activo
 * @property integer $id_rol
 * @property integer $id_pregunta
 *
 * @property IsPregunta $idPregunta
 * @property IsRol $idRol
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    
    public $clave_actual;
    
    public static function tableName()
    {
        return 'IS_UsuariosCore';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_usuario', 'usuario', 'correo', 'cedula', 'clave', 'nombre', 'apellido'], 'required'],
            [['id_usuario', 'activo'], 'integer'],
            [['fecha_registro'], 'safe'],
            [['usuario'], 'unique'],
            [['usuario', 'telefono'], 'string', 'max' => 20],
            [['correo', 'nombre', 'apellido'], 'string', 'max' => 100],
            [['cedula'], 'string', 'max' => 15],
            [['clave'], 'string', 'max' => 250],
            [['sexo'], 'string', 'max' => 1],
            [['respuesta_seguridad'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_usuario' => 'Id',
            'usuario' => 'Usuario',
            'correo' => 'Correo',
            'cedula' => 'Cedula',
            'clave' => 'Clave',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'sexo' => 'Sexo',
            'respuesta_seguridad' => 'Respuesta Seguridad',
            'telefono' => 'Telefono',
            'activo' => 'Activo',
        ];
    }
}
