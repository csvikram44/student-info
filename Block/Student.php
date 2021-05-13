<?php

namespace CsVikram\StudentInfo\Block;

use CsVikram\StudentInfo\Model\ResourceModel\Student\Collection;
use Magento\Framework\View\Element\Template;

class Student extends Template
{
    protected $_collection;
    public function __construct(
        Template\Context $context,
        Collection $collection,
        array $data = [])
    {
        $this->_collection = $collection;
        parent::__construct($context, $data);
    }

    public function getStudentList()
    {
        return $this->_collection->load();
    }
}
