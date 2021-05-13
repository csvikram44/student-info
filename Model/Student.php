<?php


namespace CsVikram\StudentInfo\Model;


use Magento\Framework\Model\AbstractModel;

class Student extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('CsVikram\StudentInfo\Model\ResourceModel\Student');
    }
}
