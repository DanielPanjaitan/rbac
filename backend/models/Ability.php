<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ability".
 *
 * @property integer $id
 * @property integer $role
 * @property integer $rule
 *
 * @property Role $role0
 * @property Rules $rule0
 */
class Ability extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ability';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role', 'rule'], 'integer'],
            [['role'], 'exist', 'skipOnError' => true, 'targetClass' => Role::className(), 'targetAttribute' => ['role' => 'id']],
            [['rule'], 'exist', 'skipOnError' => true, 'targetClass' => Rules::className(), 'targetAttribute' => ['rule' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'role' => 'Role',
            'rule' => 'Rule',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRole0()
    {
        return $this->hasOne(Role::className(), ['id' => 'role']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRule0()
    {
        return $this->hasOne(Rules::className(), ['id' => 'rule']);
    }
}
