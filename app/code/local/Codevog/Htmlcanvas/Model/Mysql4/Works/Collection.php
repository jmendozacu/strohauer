<?php

class Codevog_Htmlcanvas_Model_Mysql4_Works_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('htmlcanvas/works');
    }

}
?>