<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;

    public $search;

    protected $listeners = ['render'];
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.users',[
            'users' => User::paginate(10)
        ])->layout('components.layoutadmin');
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
