<?php

namespace Kumar\GlobalConfig\Block\Adminhtml\System\Config\Form\Field;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;

class Color extends Field
{
    protected function _getElementHtml(AbstractElement $element)
    {
        $value = $element->getValue();

        $html = '<input type="color"'
            . ' id="' . $element->getHtmlId() . '"'
            . ' name="' . $element->getName() . '"'
            . ' value="' . $value . '"'
            . ' class="input-text admin__control-text"'
            . ' style="width:60px;height:34px;padding:2px;"'
            . ' />';

        return $html;
    }
}