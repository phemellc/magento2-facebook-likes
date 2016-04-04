<?php
/**
 * Copyright © 2016 Pheme. All rights reserved.
 */

namespace Pheme\Facebook\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class ColorScheme implements ArrayInterface
{
    function toOptionArray()
    {
        return [
            ['value' => 'light', 'label' => __('Light')],
            ['value' => 'dark', 'label' => __('Dark')],
        ];
    }
}
