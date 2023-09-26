<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePost extends Component
{

    public $open = true;

    public $title, $content;

    public function render()
    {
        return view('livewire.create-post');
    }
}
