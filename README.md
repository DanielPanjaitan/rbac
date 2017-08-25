# rbac
## First Step
Please Install the database and verify your database has had user, role, rules, ability and arranger table.

## Get your  Role 

```
Yii::$app->rbaccomponent->myRole();
```
This syntax will return your role and can used to validate function by role 

## Get your ability to do something

```
Yii::$app->rbaccomponent->ableTo($ruleName);
```
This syntax will return bolean TRUE or FALSE according to your ability to do the rule and can used to validate function by rule 

