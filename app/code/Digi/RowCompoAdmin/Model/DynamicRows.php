<?php

namespace Digi\RowCompoAdmin\Model;



use Magento\Framework\Model\AbstractModel;



class DynamicRows extends AbstractModel

{

    const CACHE_TAG = 'digi_dynamic_rows';



    protected $_cacheTag = 'digi_dynamic_rows';



    protected $_eventPrefix = 'digi_dynamic_rows';



    protected function _construct()

    {

        $this->_init(\Digi\RowCompoAdmin\Model\ResourceModel\DynamicRows::class);

    }



}