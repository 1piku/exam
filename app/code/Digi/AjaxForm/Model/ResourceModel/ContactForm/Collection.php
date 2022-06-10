<?php 
namespace Digi\AjaxForm\Model\ResourceModel\ContactForm;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection{
	public function _construct(){
		$this->_init("Digi\AjaxForm\Model\ContactForm","Digi\AjaxForm\Model\ResourceModel\ContactForm");
	}
}
 ?>