<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%produto}}".
 *
 * @property integer $id
 * @property string $nome
 * @property string $descricao
 * @property integer $preco
 */
class Produto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%produto}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'descricao', 'preco'], 'required'],
            [['descricao'], 'string'],
            [['preco'], 'integer'],
            [['nome'], 'string', 'max' => 30],
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
            'descricao' => 'Descricao',
            'preco' => 'Preco',
        ];
    }
}
