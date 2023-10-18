<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "datomaestroempresa".
 *
 * @property int $id
 * @property string|null $descripcion
 * @property int|null $empresa_id
 *
 * @property Empresa $empresa
 */
class Datomaestroempresa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'datomaestroempresa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['empresa_id'], 'integer'],
            [['descripcion'], 'string', 'max' => 200],
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
            'descripcion' => 'Descripcion',
            'empresa_id' => 'Empresa ID',
        ];
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
