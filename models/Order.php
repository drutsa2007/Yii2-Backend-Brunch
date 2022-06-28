<?php

namespace app\models;

use yii\db\ActiveRecord;

class Order extends ActiveRecord
{

    public static function tableName()
    {
        return 'order';
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

}
