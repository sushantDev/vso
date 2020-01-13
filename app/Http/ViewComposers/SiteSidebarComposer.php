<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class SiteSidebarComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        $menu = [
            [
                'title'      => 'Attendance',
                'icon'       => 'calendar',
                'url'        => route('user.index'),
            ],
        ];

        $view->with('menu', $menu);
    }
}
