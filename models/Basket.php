<?php

namespace app\models;

use yii\db\ActiveRecord;

class Basket extends ActiveRecord
{

    public static function tableName()
    {
        return 'basket';
    }

    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

}
