<?php

namespace Digi\RowCompoAdmin\Model\ResourceModel\DynamicRows;



use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;



class Collection extends AbstractCollection

{

    protected $_idFieldName = 'row_id';



    protected function _construct()

    {

        $this->_init(

            'Digi\RowCompoAdmin\Model\DynamicRows',

            'Digi\RowCompoAdmin\Model\ResourceModel\DynamicRows'

        );

    }

}