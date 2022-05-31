<?php

namespace MageModule\Magento_CategoryLinks\ViewModel;

use Magento\Catalog\Block\Category\View;
use \Magento\Framework\View\Element\Block\ArgumentInterface;

class CategoryLinksUrl implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    /**
     * @var \Magento\Catalog\Block\Category\View
     */
    protected $view;

    public function __construct(
        \Magento\Catalog\Block\Category\View $view
    ) {
        $this->view = $view;
    }

    public function getSubCat()
    {
        $subcategories=$this->view->getCurrentCategory()->getCategories($this->view->getCurrentCategory()->getId());

        return $subcategories;
    }
}
