<?php
/**
 * Copyright © 2016 Pheme. All rights reserved.
 */

namespace Pheme\Facebook\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Action implements ArrayInterface
{
    function toOptionArray()
    {
        return [
            ['value' => 'like', 'label' => __('Like')],
            ['value' => 'recommend', 'label' => __('Recommend')],
        ];
    }
}
