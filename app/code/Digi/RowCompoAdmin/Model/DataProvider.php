<?php

namespace Digi\RowCompoAdmin\Model;

class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    protected $collection;
    protected $loadedData;
    protected $rowCollection;

    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        \Digi\RowCompoAdmin\Model\ResourceModel\DynamicRows\Collection $collection,
        \Digi\RowCompoAdmin\Model\ResourceModel\DynamicRows\CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection    = $collection;
        $this->rowCollection = $collectionFactory;
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    public function getData()
    {
        $dump=[];
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }
        $collection = $this->rowCollection->create();
        $items = $collection->getItems();
        foreach ($items as $item) {
            $main=json_decode($item->getData("row_name"));
            $row_id=$item->getData("row_id");
            $row_name= $main->row_name;
            $gender= $main->gender;
            $dump["row_id"] = $row_id;
            $dump["row_name"] = $row_name;
            $dump["gender"] = $gender;
            // $this->loadedData['stores']['dynamic_rows_container'][] = $item->getData();
            $this->loadedData['stores']['dynamic_rows_container'][] = $dump;
        }
        return $this->loadedData;
    }
}