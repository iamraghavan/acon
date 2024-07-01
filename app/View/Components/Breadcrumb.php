<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public $pageTitle;
    public $value1;
    public $value2;
    public $value3;

    public function __construct($pageTitle, $value1 = null, $value2 = null, $value3 = null)
    {
        $this->pageTitle = $pageTitle;
        $this->value1 = $value1;
        $this->value2 = $value2;
        $this->value3 = $value3;
    }

    public function render()
    {
        return view('components.breadcrumb');
    }
}
