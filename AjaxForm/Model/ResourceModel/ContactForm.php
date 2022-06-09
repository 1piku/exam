<?php 
namespace Digiteon\AjaxForm\Model\ResourceModel;
class ContactForm extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb{
 public function _construct(){
 $this->_init("ajaxform","id_column");
 }
}
 ?>