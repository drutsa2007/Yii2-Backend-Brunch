<?php

use yii\db\Migration;
use yii\db\Schema;


/**
 * Class m220627_134445_Orders
 */
class m220627_134445_Orders extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $tableOptions = null;
        $this->createTable('{{%order}}', [
            'id' => Schema::TYPE_PK,
            'user_id' => Schema::TYPE_INTEGER,
            'summa' => Schema::TYPE_FLOAT,
        ], $tableOptions);

        /*$this->createIndex('FK_basket', '{{%basket}}', 'order_id');
        $this->addForeignKey(
            'FK_basket', '{{%basket}}', 'order_id', '{{%order}}', 'id', 'SET NULL', 'CASCADE'
        );*/
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('{{%order}}');
        echo "m220627_134445_Orders cannot be reverted.\n";
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220627_134445_Orders cannot be reverted.\n";

        return false;
    }
    */
}
