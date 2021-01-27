<?php

use yii\db\Migration;

/**
 * Class m210126_164554_product
 */
class m210126_164554_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'price' => $this->float(),
            'category' => $this->string(),
            'rating' => $this->float()

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210126_164554_product cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210126_164554_product cannot be reverted.\n";

        return false;
    }
    */
}
