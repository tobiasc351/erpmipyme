<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "proveedor".
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $direccion
 * @property string|null $email
 * @property string|null $telefono
 *
 * @property Compra[] $compras
 */
class Proveedor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'proveedor';
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
     * Gets query for [[Compras]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompras()
    {
        return $this->hasMany(Compra::class, ['proveedor_id' => 'id']);
    }
}
