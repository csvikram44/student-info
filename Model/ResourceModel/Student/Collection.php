<?php

namespace CsVikram\StudentInfo\Model\ResourceModel\Student;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init('\CsVikram\StudentInfo\Model\Student','\CsVikram\StudentInfo\Model\ResourceModel\Student');
    }
}
