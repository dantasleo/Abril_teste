<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%pedido}}".
 *
 * @property integer $id_produto
 * @property integer $id_cliente
 */
class Pedido extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pedido}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_produto', 'id_cliente'], 'required'],
            [['id_produto', 'id_cliente'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_produto' => 'Id Produto',
            'id_cliente' => 'Id Cliente',
        ];
    }
}
