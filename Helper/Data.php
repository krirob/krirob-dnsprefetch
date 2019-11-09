<?php
/**
 * Created by PhpStorm.
 * User: robert
 * Date: 2019-11-05
 * Time: 14:49
 */

namespace Krirob\Dnsprefetch\Helper;

use \Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    /**
     * @return array
     */
    public function getAllPages()
    {
        $urls = $this->scopeConfig->getValue(
            'krirob_performance/krirob_dnsprefetch/all_pages',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );

        return explode(PHP_EOL, $urls);
    }

    /**
     * @return array
     */
    public function getCheckoutPage()
    {
        $urls = $this->scopeConfig->getValue(
            'krirob_performance/krirob_dnsprefetch/checkout_page',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );

        return explode(PHP_EOL, $urls);
    }
}
