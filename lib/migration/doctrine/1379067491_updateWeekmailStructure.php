<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class updateWeekmailStructure extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('weekmail', 'mot_du_bde', 'string', '', array(
             ));
        $this->addColumn('weekmail_article', 'event_id', 'integer', '8', array(
             ));
    }

    public function down()
    {
        $this->removeColumn('weekmail', 'mot_du_bde');
        $this->removeColumn('weekmail_article', 'event_id');
    }
}