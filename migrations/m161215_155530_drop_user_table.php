<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `user`.
 */
class m161215_155530_drop_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropTable('user');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        return false;
    }
}
