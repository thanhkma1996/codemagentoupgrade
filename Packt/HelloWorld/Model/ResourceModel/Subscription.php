<?php
namespace Test\Magenest\Model\ResourceModel;

class Subscription extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb {
    public function _construct() {
        $this->_init('magenest_part_time', 'member_id');
    }
}