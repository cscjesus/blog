<?php
namespace App\View\Composers;

use Illuminate\View\View;

class CompanyComposer {
    public function compose(View $view):void
    {
        $view->with('titulo', 'My Awesome Company');
    }
}
