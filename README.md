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

###### n.b
* Roles are user level on the system like admin, member, employee etc
* Rules are Role task , like create, update, delete etc
* Ability is relation what rules attach to the user role like admin can able to delete user etc
* Arranger is relation of the Role attach to the User 

