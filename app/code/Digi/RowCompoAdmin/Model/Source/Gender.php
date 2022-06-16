<?php

namespace Digi\RowCompoAdmin\Model\Source;



class Gender implements \Magento\Framework\Option\ArrayInterface

{

    public function toOptionArray()

    {

        $yesNoArray[] = [

            'label' => 'Male',

            'value' => 0,

        ];

        $yesNoArray[] = [

            'label' => 'Female',

            'value' => 1,

        ];

        return $yesNoArray;

    }

}