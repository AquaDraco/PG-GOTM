<?php

namespace App\Http\Controllers;

use Livewire\Component;
use App\Models\JuryMember;

/**
 *
 */
class JuryController extends Component
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('jury');
    }
}
