<?php
/**
 * Copyright © 2016 Pheme. All rights reserved.
 */

namespace Pheme\Facebook\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Yesno implements ArrayInterface
{
    function toOptionArray()
    {
        return [
            ['value' => 1, 'label' => __('Yes')],
            ['value' => 0, 'label' => __('No')],
        ];
    }
}
