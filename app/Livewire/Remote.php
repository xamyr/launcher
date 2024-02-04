<?php

namespace App\Livewire;

use Livewire\Component;

use Cache;

class Remote extends Component
{
    public function render()
    {
        return view('livewire.remote');
    }

    public function launch()
    {
        Cache::put('launch', true);
    }

    public function resetLaunch()
    {
        Cache::put('launch', false);
    }
}
