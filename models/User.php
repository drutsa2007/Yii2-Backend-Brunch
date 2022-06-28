<?php

namespace app\models;

use yii\db\ActiveRecord;

class User extends ActiveRecord
{

    public static function tableName()
    {
        return 'user';
    }

    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['user_id' => 'id']);
    }

}
