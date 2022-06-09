<?php 
namespace Digiteon\AjaxForm\Model\ResourceModel\ContactForm;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection{
	public function _construct(){
		$this->_init("Digiteon\AjaxForm\Model\ContactForm","Digiteon\AjaxForm\Model\ResourceModel\ContactForm");
	}
}
 ?>