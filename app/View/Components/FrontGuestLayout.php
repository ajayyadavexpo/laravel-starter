<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FrontGuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('front.layouts.guest');
    }
}
