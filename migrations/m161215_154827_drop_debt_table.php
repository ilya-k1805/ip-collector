<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `debt`.
 */
class m161215_154827_drop_debt_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropTable('debt');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        return false;
    }
}
