<?php

namespace App\View;

use Illuminate\View\View;

class LaptopComposer {
    public function compose(View $view) {
        $view->with('title', 'ahmad.id')
            ->with('description', 'tempat jual beli laptop');
    }
}