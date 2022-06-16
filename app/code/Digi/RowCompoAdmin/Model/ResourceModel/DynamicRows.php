<?php

namespace Digi\RowCompoAdmin\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;


class DynamicRows extends AbstractDb

{

    protected function _construct()

    {

        $this->_init('digi_dynamic_rows', 'row_id');

    }


    public function deleteDynamicRows()

    {

        $connection = $this->getConnection();

        $connection->delete(

            $this->getMainTable(),

            ['row_id > ?' => 0]

        );

    }

}