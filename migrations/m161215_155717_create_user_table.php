<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `user`.
 */
class m161215_155717_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable(
            'user',
            [
                'id' => Schema::TYPE_PK,
                'password' => Schema::TYPE_STRING.' NOT NULL',
                'email' => Schema::TYPE_STRING.' NOT NULL',
            ]
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
