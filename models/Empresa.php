<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empresa".
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $direccion
 * @property string|null $email
 * @property string|null $telefono
 *
 * @property Datomaestroempresa[] $datomaestroempresas
 * @property Empleado[] $empleados
 * @property Producto[] $productos
 * @property Usuario[] $usuarios
 */
class Empresa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'empresa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'email'], 'string', 'max' => 100],
            [['direccion'], 'string', 'max' => 200],
            [['telefono'], 'string', 'max' => 20],
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
            'direccion' => 'Direccion',
            'email' => 'Email',
            'telefono' => 'Telefono',
        ];
    }

    /**
     * Gets query for [[Datomaestroempresas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDatomaestroempresas()
    {
        return $this->hasMany(Datomaestroempresa::class, ['empresa_id' => 'id']);
    }

    /**
     * Gets query for [[Empleados]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmpleados()
    {
        return $this->hasMany(Empleado::class, ['empresa_id' => 'id']);
    }

    /**
     * Gets query for [[Productos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductos()
    {
        return $this->hasMany(Producto::class, ['empresa_id' => 'id']);
    }

    /**
     * Gets query for [[Usuarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::class, ['empresa_id' => 'id']);
    }
}
