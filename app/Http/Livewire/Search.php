<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;

    public $name;

    public function render()
    {
        $users = User::search($this->name)->paginate(10);
        return view('livewire.search', compact('users'));
    }
}
