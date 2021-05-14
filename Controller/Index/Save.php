<?php
namespace CsVikram\StudentInfo\Controller\Index;

use Magento\Framework\App\Action\Context;

class Save extends \Magento\Framework\App\Action\Action
{
    protected $resultRedirectFactory;
    protected $_student;
    public function __construct(
        Context $context,
        \Magento\Framework\Controller\Result\Redirect $resultRedirect,
        \CsVikram\StudentInfo\Model\Student $student)
    {
        $this->_student = $student;
        $this->resultRedirectFactory = $resultRedirect;
        parent::__construct($context);
    }

    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        if ($data['fname'] != '' && $data['lname'] != ''){
            $student = $this->_student;
            $student->setFname($data['fname']);
            $student->setLname($data['lname']);
            $student->save();
        }
        /** @var \Magento\Framework\Controller\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('*/*/index');
        return $resultRedirect;
    }
}


