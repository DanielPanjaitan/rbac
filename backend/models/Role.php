<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "role".
 *
 * @property integer $id
 * @property string $role
 *
 * @property RoleToUser[] $roleToUsers
 * @property RulesToRoles[] $rulesToRoles
 */
class Role extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'role';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoleToUsers()
    {
        return $this->hasMany(RoleToUser::className(), ['role' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRulesToRoles()
    {
        return $this->hasMany(RulesToRoles::className(), ['role' => 'id']);
    }
}
