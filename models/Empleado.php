<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empleado".
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $apellido
 * @property string|null $numero
 * @property string|null $residencia
 * @property string|null $curso
 * @property int|null $empresa_id
 *
 * @property Compra[] $compras
 * @property Empresa $empresa
 */
class Empleado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'empleado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['empresa_id'], 'integer'],
            [['nombre', 'apellido', 'curso'], 'string', 'max' => 50],
            [['numero', 'residencia'], 'string', 'max' => 20],
            [['empresa_id'], 'exist', 'skipOnError' => true, 'targetClass' => Empresa::class, 'targetAttribute' => ['empresa_id' => 'id']],
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
            'apellido' => 'Apellido',
            'numero' => 'Numero',
            'residencia' => 'Residencia',
            'curso' => 'Curso',
            'empresa_id' => 'Empresa ID',
        ];
    }

    /**
     * Gets query for [[Compras]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompras()
    {
        return $this->hasMany(Compra::class, ['empleado_id' => 'id']);
    }

    /**
     * Gets query for [[Empresa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmpresa()
    {
        return $this->hasOne(Empresa::class, ['id' => 'empresa_id']);
    }
}
