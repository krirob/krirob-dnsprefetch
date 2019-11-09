<?php
/**
 * Created by PhpStorm.
 * User: robert
 * Date: 2019-11-05
 * Time: 14:57
 */
namespace Krirob\Dnsprefetch\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

use Krirob\Dnsprefetch\Helper\Data;

class Dnsprefetch extends Template
{

    private $helper;

    /**
     * Dnsprefetch constructor.
     * @param Context $context
     * @param Data $helper
     * @param array $data
     */
    public function __construct(
        Context $context,
        Data $helper,
        array $data = []
    ) {
        $this->helper = $helper;
        parent::__construct($context, $data);
    }

    /**
     * @return array
     */
    public function getAllPages()
    {
        return array_filter($this->helper->getAllPages());
    }

    /**
     * @return array
     */
    public function getCheckoutPage()
    {
        return array_filter($this->helper->getCheckoutPage());
    }
}
