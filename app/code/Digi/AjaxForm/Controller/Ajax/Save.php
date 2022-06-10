<?php

namespace Digi\AjaxForm\Controller\Ajax;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\JsonFactory;
use Digi\AjaxForm\Model\ContactFormFactory;

class Save extends \Magento\Framework\App\Action\Action
{

    protected $_contactFormFactory;
     /**
     * @var Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    protected $resultJsonFactory; 

    /**
     * @param Context     $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        JsonFactory $resultJsonFactory,
        ContactFormFactory $contactFormFactory
        )
    {

        $this->resultPageFactory = $resultPageFactory;
        $this->resultJsonFactory = $resultJsonFactory;
        $this->_contactFormFactory = $contactFormFactory;
        return parent::__construct($context);
    }


    public function execute()
    {
         // die('hello');
        $post_data = $this->getRequest()->getPostValue();
        // var_dump($post_data);
        $result = $this->resultJsonFactory->create();
        $resultPage = $this->resultPageFactory->create();
        try {
            $contactFormFactory = $this->_contactFormFactory->create();
            $contactFormFactory->setData($post_data);
            $contactFormFactory->save();
            $this->messageManager->addSuccess(__("Save Data"));
        } catch (\Exception $e) {
            $this->messageManager->addError(__('please try again. Form Not Submit'));
        }
        $result->setData(['output' => 'successful']);
        return $result;
    } 
}