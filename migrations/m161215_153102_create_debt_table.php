<?php

use yii\db\Migration;

/**
 * Handles the creation of table `debt`.
 */
class m161215_153102_create_debt_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('debt',['id' => 'pk','post' => 'text','user_id' => 'int']);
        $this->addForeignKey('post_user_id','debt','user_id','user','id');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('debt');
    }
}
