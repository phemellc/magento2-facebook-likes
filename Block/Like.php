<?php
/**
 * Copyright © 2016 Pheme. All rights reserved.
 */

namespace Pheme\Facebook\Block;

use Magento\Framework\UrlInterface;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Like extends Template
{
    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    protected $urlInterface;

    /**
     * Extension config path
     */
    const XML_PATH_FB = 'pheme_facebook/likes/';

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param ScopeConfigInterface $scopeConfig
     * @param UrlInterface $urlInterface
     * @param array $data
     */
    public function __construct(
        Context $context,
        ScopeConfigInterface $scopeConfig,
        UrlInterface $urlInterface,
        array $data
    ) {
        parent::__construct($context, $data);
        $this->scopeConfig = $scopeConfig;
        $this->urlInterface = $urlInterface;
    }

    public function getShowFaces()
    {
        return $this->scopeConfig->getValue(static::XML_PATH_FB . 'show_faces', ScopeInterface::SCOPE_STORE);
    }

    public function getShare()
    {
        return $this->scopeConfig->getValue(static::XML_PATH_FB . 'share', ScopeInterface::SCOPE_STORE);
    }

    public function getAction()
    {
        return $this->scopeConfig->getValue(static::XML_PATH_FB . 'action', ScopeInterface::SCOPE_STORE);
    }

    public function getColorScheme()
    {
        return $this->scopeConfig->getValue(static::XML_PATH_FB . 'color_scheme', ScopeInterface::SCOPE_STORE);
    }

    public function getProductLayout()
    {
        return $this->scopeConfig->getValue(static::XML_PATH_FB . 'product_layout', ScopeInterface::SCOPE_STORE);
    }

    public function getCategoryLayout()
    {
        return $this->scopeConfig->getValue(static::XML_PATH_FB . 'category_layout', ScopeInterface::SCOPE_STORE);
    }

    public function getDataRef()
    {
        return $this->scopeConfig->getValue(static::XML_PATH_FB . 'data_ref', ScopeInterface::SCOPE_STORE);
    }

    public function getWidth()
    {
        return $this->scopeConfig->getValue(static::XML_PATH_FB . 'width', ScopeInterface::SCOPE_STORE);
    }

    public function getUrlInterface()
    {
        return $this->urlInterface;
    }
}
