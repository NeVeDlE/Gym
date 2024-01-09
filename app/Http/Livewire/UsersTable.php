<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UsersTable extends Component
{
    public $search;
    public $users = [];
    public function render()
    {
        return view('livewire.users-table');
    }
}
