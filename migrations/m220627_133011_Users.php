<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m220627_133011_Users
 */
class m220627_133011_Users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $tableOptions = null;
        $this->createTable('{{%user}}', [
            'id' => Schema::TYPE_PK,
            'email' => Schema::TYPE_STRING,
            'name' => Schema::TYPE_STRING,
            'phone' => Schema::TYPE_STRING,
            'password' => Schema::TYPE_STRING,
        ], $tableOptions);

        /*$this->createIndex('FK_order', '{{%order}}', 'user_id');
        $this->addForeignKey(
            'FK_order', '{{%order}}', 'user_id', '{{%user}}', 'id', 'SET NULL', 'CASCADE'
        );*/
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('{{%user}}');
        echo "m220627_133011_Users cannot be reverted.\n";
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220627_133011_Users cannot be reverted.\n";

        return false;
    }
    */
}
