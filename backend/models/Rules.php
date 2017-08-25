<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rules".
 *
 * @property integer $id
 * @property string $rule
 * @property string $desc
 *
 * @property RulesToRoles[] $rulesToRoles
 */
class Rules extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rules';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['desc'], 'string'],
            [['rule'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rule' => 'Rule',
            'desc' => 'Desc',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRulesToRoles()
    {
        return $this->hasMany(RulesToRoles::className(), ['rule' => 'id']);
    }
}
