<?php

use yii\db\Migration;

/**
 * Class m230314_125458_livro
 */
class m230314_125458_livro extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('livro',[
            'id' => $this-> primaryKey(),
            'nome' => $this-> text()-> notNull()-> comment("Nome do livro"),
            'descricao' => $this-> text()-> comment("Descrição do livro"),
            'imagemUrl' => $this-> text()-> comment("Rota da imagem"),
            
        ]);
    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this-> dropTable("livro");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230314_125458_livro cannot be reverted.\n";

        return false;
    }
    */
}
