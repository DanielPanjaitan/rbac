<?php
namespace backend\components;

use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
use backend\models\Ability;
use backend\models\AbilitySearch;
use backend\models\Arranger;
use backend\models\ArrangerSearch;
use backend\models\Role;
use backend\models\RoleSearch;
use backend\models\Rules;
use backend\models\RulesSearch;
use yii\web\NotFoundHttpException;
use yii\web\UnauthorizedHttpException;

class RBACComponent extends Component
{
    public function getRole()
    {
        $myId=Yii::$app->user->getId();
        $arranger =  new Arranger();
        $arranger = Arranger::find()->where(['user' => $myId])->one();

        return $arranger;
    }

    public function myRole()
    {
        return $this->getRole()->role0->role;
    }

    public function ableTo($ability)
    {
        $able=false;
        $myRole = $this->getRole()->role;
        
        $rules =  new Rules();
        if (!$rules = Rules::find()->where(['rule' => $ability])->one()) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        $ability= new Ability();
        if ($ability = Ability::find()->where(['role' => $myRole, 'rule'=>$rules->id])->one()) {
            $able=true;
        } else {
            $able=false;
        }
        return $able;
    }
}
