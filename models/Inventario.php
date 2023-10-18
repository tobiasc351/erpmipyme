<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inventario".
 *
 * @property int $id
 * @property int|null $producto_id
 * @property int|null $cantidad
 * @property string|null $ubicacion
 *
 * @property Producto $producto
 */
class Inventario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['producto_id', 'cantidad'], 'integer'],
            [['ubicacion'], 'string', 'max' => 50],
            [['producto_id'], 'exist', 'skipOnError' => true, 'targetClass' => Producto::class, 'targetAttribute' => ['producto_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'producto_id' => 'Producto ID',
            'cantidad' => 'Cantidad',
            'ubicacion' => 'Ubicacion',
        ];
    }

    /**
     * Gets query for [[Producto]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducto()
    {
        return $this->hasOne(Producto::class, ['id' => 'producto_id']);
    }
}
