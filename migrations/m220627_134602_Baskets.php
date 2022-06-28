<?php

use yii\db\Migration;
use yii\db\Schema;


/**
 * Class m220627_134602_Baskets
 */
class m220627_134602_Baskets extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $tableOptions = null;
        $this->createTable('{{%basket}}', [
            'id' => Schema::TYPE_PK,
            'order_id' => Schema::TYPE_INTEGER,
            'product_id' => Schema::TYPE_INTEGER,
        ], $tableOptions);

    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('{{%basket}}');
        echo "m220627_134602_Baskets cannot be reverted.\n";
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220627_134602_Baskets cannot be reverted.\n";

        return false;
    }
    */
}
