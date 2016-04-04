<?php
/**
 * Copyright © 2016 Pheme. All rights reserved.
 */

namespace Pheme\Facebook\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Layout implements ArrayInterface
{
    function toOptionArray()
    {
        return [
            ['value' => 'standard', 'label' => __('Standard')],
            ['value' => 'button_count', 'label' => __('Button Count')],
            ['value' => 'button', 'label' => __('Button')],
            ['value' => 'box_count', 'label' => __('Box Count')],
        ];
    }
}
