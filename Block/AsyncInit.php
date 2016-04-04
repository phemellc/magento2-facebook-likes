<?php
/**
 * Copyright © 2016 Pheme. All rights reserved.
 */

namespace Pheme\Facebook\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\Locale\ResolverInterface;
use Magento\Framework\View\Element\Template\Context;

class AsyncInit extends Template
{
    protected $locale;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param ResolverInterface $locale
     * @param array $data
     */
    public function __construct(
        Context $context,
        ResolverInterface $locale,
        array $data
    ) {
        parent::__construct($context, $data);
        $this->locale = $locale;
    }

    public function getLocale()
    {
        return $this->locale->getLocale();
    }
}