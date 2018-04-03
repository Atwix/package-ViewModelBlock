<?php

namespace Atwix\ViewModelBlock\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

/**
 * Class LoveLabelView
 */
class LoveLabelView implements ArgumentInterface
{
    /**
     * @return string
     */
    public function getLoveLabel()
    {
        return __('From <a href="%1">Atwix</a> With Love <3', 'https://atwix.com');
    }
}