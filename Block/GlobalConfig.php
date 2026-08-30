<?php
declare(strict_types=1);

namespace Kumar\GlobalConfig\Block;

use Magento\Framework\View\Element\Template;
use Kumar\GlobalConfig\Helper\Data as ConfigHelper;

class GlobalConfig extends Template
{
    public function __construct(Template\Context $context, private readonly ConfigHelper $configHelper, array $data = [])
    { parent::__construct($context, $data); }

    public function isEnabled(): bool { return $this->configHelper->isEnabled(); }
    public function getConfig(string $group, string $field): ?string { return $this->configHelper->getConfig($group . '/' . $field); }
}
