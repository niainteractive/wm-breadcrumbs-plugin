<?php namespace NiaInteractive\Breadcrumbs\Components;

use Cms\Classes\ComponentBase;
use Winter\Pages\Models\Page;

class Breadcrumbs extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Breadcrumbs',
            'description' => 'Displays breadcrumbs for the current page.'
        ];
    }

    public function onRun()
    {
        $this->page = Page::findByUrl($this->controller->currentPage->getBaseFileName());
        $this->breadcrumbs = $this->getBreadcrumbs($this->page);
    }

    public function getBreadcrumbs($page)
    {
        $breadcrumbs = [];

        while ($page) {
            $breadcrumbs[] = $page;
            $page = $page->parent;
        }

        return array_reverse($breadcrumbs);
    }
}
