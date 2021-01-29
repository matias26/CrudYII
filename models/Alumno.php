<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alumnos".
 *
 * @property int $codigo
 * @property string $nombre
 * @property string $mail
 * @property int $codigocurso
 */
class Alumno extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alumnos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'mail', 'codigocurso'], 'required'],
            [['codigocurso'], 'integer'],
            [['nombre'], 'string', 'max' => 50],
            [['mail'], 'string', 'max' => 70],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codigo' => 'Codigo',
            'nombre' => 'Nombre',
            'mail' => 'Mail',
            'codigocurso' => 'Codigocurso',
        ];
    }
}
