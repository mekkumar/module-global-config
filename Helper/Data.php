<?php
declare(strict_types=1);

namespace Kumar\GlobalConfig\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    private const XML_PATH = 'kumar_globalconfig/';

    public function isEnabled(?int $storeId = null): bool
    {
        return $this->scopeConfig->isSetFlag(self::XML_PATH . 'general/enabled', ScopeInterface::SCOPE_STORE, $storeId);
    }

    public function getConfig(string $path, ?int $storeId = null): ?string
    {
        $value = $this->scopeConfig->getValue(self::XML_PATH . ltrim($path, '/'), ScopeInterface::SCOPE_STORE, $storeId);
        return $value !== null ? (string) $value : null;
    }

}
