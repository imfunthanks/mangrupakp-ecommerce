<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class About extends Component
{
    public function render()
    {
        return view('livewire.about')
            ->extends('layouts.app')
            ->section('content');
    }
}
