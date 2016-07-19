<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%cliente}}".
 *
 * @property integer $id
 * @property string $nome
 * @property string $email
 * @property integer $telefone
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cliente}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'email', 'telefone'], 'required'],
            [['telefone'], 'integer'],
            [['nome'], 'string', 'max' => 30],
            [['email'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'email' => 'Email',
            'telefone' => 'Telefone',
        ];
    }
}
