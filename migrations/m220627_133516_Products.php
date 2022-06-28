<?php

use yii\db\Migration;
use yii\db\Schema;


/**
 * Class m220627_133516_Products
 */
class m220627_133516_Products extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $tableOptions = null;
        $this->createTable('{{%product}}', [
            'id' => Schema::TYPE_PK,
            'caption' => Schema::TYPE_STRING,
            'price' => Schema::TYPE_FLOAT,
        ], $tableOptions);

    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('{{%product}}');
        echo "m220627_133516_Products cannot be reverted.\n";
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220627_133516_Products cannot be reverted.\n";

        return false;
    }
    */
}
